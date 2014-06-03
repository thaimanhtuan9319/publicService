<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require SYSPATH.('database.php');
    
function get_list_dichvu(){
    $sql = 'select * from dich_vu_cong';
    return db_select_list($sql);
}
if(isset($_POST['submitted'])){
    /* Up load file*/
    $allowedExts = array("pdf", "doc", "docx");
    $temp = explode(".", $_FILES["file_upload"]["name"]);
    $extension = end($temp);
    $mess = '';
    $id_dich_vu = $_POST['Id_dichvu'];
        
    if ((($_FILES["file_upload"]["type"] == "application/pdf")
        || ($_FILES["file_upload"]["type"] == "text/pdf")
        || ($_FILES["file_upload"]["type"] == "application/msword")
        || ($_FILES["file_upload"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")) 
        && ($_FILES["file_upload"]["size"] < 102400000) && in_array($extension, $allowedExts)) {
        if ($_FILES["file_upload"]["error"] > 0) {
            $mess =  "Error: " . $_FILES["file_upload"]["error"] . "<br>";
        } else {
            if(isset($_FILES["file_upload"]["size"]) > 0){
                $filename = $_FILES["file_upload"]["name"];
                $filetype = $_FILES["file_upload"]["type"];
                $size = $_FILES["file_upload"]["size"];
                $tmpName  = $_FILES['file_upload']['tmp_name'];
               
                    
                if (file_exists("public/upload/" . $_FILES["file_upload"]["name"])) {
                    $mess =  $_FILES["file_upload"]["name"] . " đã tồn tại ";
                } else {
                    $fp      = fopen($tmpName, 'r');
                    $content = fread($fp, filesize($tmpName));
                    $content = addslashes($content);
                    fclose($fp);
                        
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $con = mysql_connect($host,$user,$pass) 
                          or die("Can't connect to database!");
                    mysql_select_db("public_service",$con) 
                          or die("Can't select database!");
                    mysql_query("SET NAMES utf8");
                        
                    $sql = "insert into tai_lieu(Id_dich_vu,ten_tai_lieu, kieu, kich_thuoc, data) "
            . "values ('$id_dich_vu', '$filename', '$filetype', '$size','$content')";
                    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
        mysql_close($con);
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
        ."/index.php?action=staff/success");
                }
            }
        }
    }  else {
        $mess = 'File không hợp lệ';
    }
}