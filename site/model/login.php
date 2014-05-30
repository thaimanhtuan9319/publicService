<?php
require SYSPATH.('database.php');
/* 
 * Author: Tuan ThaiManh
 */
$name = $pass = '';
$nameMess = $passMess = '';
$id_canbo = $id_coquan = '';

if(isset($_POST['submitted'])){
    require 'site/model/validateInput.php'; 
    
    // Lay gia tri input
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    // Ket noi toi co so du lieu
    $con=mysqli_connect("localhost","root","","public_service");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan 
    // admin hay khong
    $sql1 = "select * from users where Username = '$name' and Password = '$pass' and User_type = '1';";
    $result1 = mysqli_query($con, $sql1);
    $numrows1 = mysqli_num_rows($result1);
    
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan
    // can bo hay khong
    $sql2 = "select * from can_bo where username = '$name' and password = '$pass';";
    $result2 = mysqli_query($con, $sql2);
    $numrows2 = mysqli_num_rows($result2);
    
    $sql_id = "select id_can_bo,Id_don_vi_quan_ly from can_bo where username = '$name' and password = '$pass';";
    $rs = mysqli_query($con, $sql_id);
    $row = mysqli_fetch_array($rs);
    $id_canbo = $row['id_can_bo'];
    $id_coquan = $row['Id_don_vi_quan_ly'];
    
    // Kiem tra tai khoan nguoi dung nhap vao co phai tai khoan 
    // thuong hay khong
    $sql3 = "select * from users where Username = '$name' and Password = '$pass' and User_type = '2';";
    $result3 = mysqli_query($con, $sql3);
    $numrows3 = mysqli_num_rows($result3);
    
    
    if($numrows1 > 0){
        session_start();
	$_SESSION['username'] = $name;
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=loggedin_site/admin_site");
        exit();
        
    }
    elseif ($numrows2 > 0) {
        
        echo $id_canbo;
        echo $id_coquan;
        
        
        session_start();
	$_SESSION['username'] = $name;
        $_SESSION['id_canbo'] = $id_canbo;
        $_SESSION['id_coquan'] = $id_coquan;
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