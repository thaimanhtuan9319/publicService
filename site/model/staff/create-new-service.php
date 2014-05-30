<?php
    
/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');  
/*
 * Nhap form
 */

function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(isset($_POST['submitted'])){
    /* Up load file*/
    $allowedExts = array("pdf", "doc", "docx");
    $temp = explode(".", $_FILES["file_upload"]["name"]);
    $extension = end($temp);
    $mess = '';
        
    if ((($_FILES["file_upload"]["type"] == "application/pdf")
        || ($_FILES["file_upload"]["type"] == "text/pdf")
        || ($_FILES["file_upload"]["type"] == "application/msword")
        || ($_FILES["file_upload"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")) 
        && ($_FILES["file_upload"]["size"] < 102400000) && in_array($extension, $allowedExts)) {
        if ($_FILES["file_upload"]["error"] > 0) {
            $mess =  "Error: " . $_FILES["file_upload"]["error"] . "<br>";
        } else {
            if (file_exists("public/upload/" . $_FILES["file_upload"]["name"])) {
                $mess =  $_FILES["file_upload"]["name"] . " đã tồn tại ";
            } else {
                move_uploaded_file($_FILES["file_upload"]["tmp_name"],
                "public/upload/" . $_FILES["file_upload"]["name"]);
                $mess = 'Tải file thành công';
            }
        }
    }  else {
        $mess = 'File không hợp lệ';
    }
    
    $serviceName = $iddonviquanly = $mota = $mucdocungcap = '';
    $trangthaicongbo = 0;
    
    $serviceName = $_POST['serviceName'];
    $mota = $_POST['mota'];
    $mucdocungcap = $_POST['mucdocungcap'];
    $iddonviquanly = $_POST['Id_donviquanly'];
    
    //đừng dùng sqli, thử dùng sql xem, lần trước Thành cũng dùng sqli bị lỗi
    //sau t dùng sql thì được
    $host = "localhost";
    $user = "root";
    $pass = "";
    $con = mysql_connect($host,$user,$pass) 
          or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
          or die("Can't select database!");
    mysql_query("SET NAMES utf8");
 
    
    //$con=mysqli_connect("localhost","root","","public_service");
   // mysqli_set_charset($con, "utf8");
    //if (mysqli_connect_errno()) {
    //    echo "Failed to connect to MySQL: " . mysqli_connect_error();
   // }
    //thử xem
    $sql = "insert into dich_vu_cong(ten_dich_vu, mo_ta, muc_do_cung_cap, trang_thai_cong_bo, id_don_vi_quan_ly) "
                . "values ('$serviceName', '$mota', $mucdocungcap,$trangthaicongbo,$iddonviquanly)";
    
    if (!mysql_query($sql)) { 
        die('Error: ' . mysql_error($con));
    }
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
        ."/index.php?action=staff/success");
    exit();
}

