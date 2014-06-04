<?php
require SYSPATH.('database.php');
/* 
 * Author: Tuan ThaiManh
 */
$name = $pass = '';
$nameMess = $passMess = '';
$id_canbo = $id_coquan = '';
$conn = null;
if(isset($_POST['submitted'])){
    require 'site/model/validateInput.php'; 
    
    $conn = null;
    // Lay gia tri input
    $name = $_POST['username'];
    $pass = md5($_POST['password']);
    
    // Ket noi toi co so du lieu
    db_connect();
    
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan 
    // admin hay khong
    $sql1 = "select * from users where Username = '".$name."' and Password = '".$pass."' and User_type = '1';";
    $result1 = mysql_query($sql1);
    $numrows1 = mysql_num_rows($result1);
    
   //cong dan hay khong
    $sql3 = "select * from users where Username = '".$name."' and Password = '".$pass."' and User_type = '2';";
    $result3 = mysql_query($sql3);
    $numrows3 = mysql_num_rows($result3);
    
    //can bo
    $sql2 = "select * from can_bo where Username = '".$name."' and Password = '".$pass."';";
    $result2 = mysql_query($sql2);
    $numrows2 = mysql_num_rows($result1);
    
    if($numrows1 > 0){
        session_start();
	    $_SESSION['username'] = $name;
        header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/loggedin_site-admin_site");
        exit();
        
    }
    else{
        if ($numrows2 > 0) {
            session_start();
	        $_SESSION['username'] = $name;
            $_SESSION['id_canbo'] = $id_canbo;
            $_SESSION['id_coquan'] = $id_coquan;
            header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/loggedin_site-staff_site");
            exit();
        }
        else{
            if ($numrows3 > 0) {
                session_start();
	            $_SESSION['username'] = $name;
                header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/home");
                exit();
            }
            else {
                $message = 'Sai tên đăng nhập hoặc mật khẩu. Xin nhập lại';
            }   
        }
    }
}
?>