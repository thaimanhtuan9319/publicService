<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
$name = $username = $password = $email = $phone = $phongban = '';
$firstNameMess = $lastNameMess = $usernameMess = $passwordMess = $emailMess = '';

$mess = '';

function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    require 'site/model/validateInput.php'; 
        
    //Lay gia tri input
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phongban = $_POST['phongban'];
        
    //Xac thuc input
//    $firstNameMess = check_firstname_input($firstname);
//    $lastNameMess = check_lastname_input($lastname);
//    $usernameMess = check_username_input($username);
//    $passwordMess = check_password_input($password);
//    $emailMess = check_email_input($email);
    
    //Neu khong loi thi nhay toi trang Success
//    if($firstNameMess == 'Hợp lệ' && $lastNameMess == 'Hợp lệ' && $usernameMess == 'Hợp lệ'
//    && $passwordMess == 'Hợp lệ' && $emailMess == 'Hợp lệ'){
//        require SYSPATH.('database.php');
            
            
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
        
        $sql = "insert into can_bo(ten_can_bo, dien_thoai, email, username, password, Id_don_vi_quan_ly) "
            . "values ('$name', '$phone', '$email','$username','$password','$phongban')";
                
        if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
        $mess = 'Tạo tài khoản thành công';
            
        mysql_close($con);
        header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/admin-success");
        exit();
//    }   
}
?>