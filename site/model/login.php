<?php

/* 
 * Author: Tuan ThaiManh
 */

$name = $pass = '';
$nameMess = $passMess = '';

if(isset($_POST['submitted'])){
    require 'site/model/validateInput.php'; 
    
    // Lay gia tri input
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    // Ket noi toi co so du lieu
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $con = mysql_connect($host,$user,$pass) 
        or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
        or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan 
    // admin hay khong
    $sql1 = "select * from users where Username = '$name' and Password = '$pass' and User_type = '1';";
    $result1 = mysql_query($sql1);
    $numrows1 = mysql_num_rows($result1);
    echo $numrows1;
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan
    // can bo hay khong
    $sql2 = "select * from can_bo where username = '$name' and Password = '$pass';";
    $result2 = mysql_query($sql2);
    $numrows2 = mysql_num_rows($result2);
    
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan 
    // thuong hay khong
    $sql3 = "select * from users where Username = '$name' and Password = '$pass' and User_type = '2';";
    $result3 = mysql_query($sql3);
    $numrows3 = mysql_num_rows($result3);
    
    
    if($numrows1 > 0){
        session_start();
	$_SESSION['username'] = $name;
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=loggedin_site/admin_site");
        exit();
        
    }
    elseif ($numrows2 > 0) {
        session_start();
	$_SESSION['username'] = $name;
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=loggedin_site/staff_site");
        exit();
    }
    elseif ($numrows3 > 0) {
        session_start();
	$_SESSION['username'] = $name;
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=loggedin_site/member_site");
        exit();
    }
    else {
        $message = 'Sai tên đăng nhập hoặc mật khẩu. Xin nhập lại';
    }
}
?>