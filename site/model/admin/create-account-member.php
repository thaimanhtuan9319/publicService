<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
$firstname = $lastname = $username = $password = $email = '';
$firstNameMess = $lastNameMess = $usernameMess = $passwordMess = $emailMess = '';
$usertype = '';
$mess = '';
    
if(isset($_POST['submited'])){
    require 'site/model/validateInput.php'; 
        
    //Lay gia tri input
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
        
    //Xac thuc input
//    $firstNameMess = check_firstname_input($firstname);
//    $lastNameMess = check_lastname_input($lastname);
//    $usernameMess = check_username_input($username);
//    $passwordMess = check_password_input($password);
//    $emailMess = check_email_input($email);
    
    //Neu khong loi thi nhay toi trang Success
//    if($firstNameMess == 'Hợp lệ' && $lastNameMess == 'Hợp lệ' && $usernameMess == 'Hợp lệ'
//    && $passwordMess == 'Hợp lệ' && $emailMess == 'Hợp lệ'){
        require SYSPATH.('database.php');
            
            
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
        
        $sql = "insert into users(Firstname, Lastname, Username, Password, User_type, Email) "
            . "values ('$firstname', '$lastname', '$username','$password','2','$email')";
                
        if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
        $mess = 'Tạo tài khoản thành công';
            
        mysql_close($con);
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");
        exit();
//    }   
}
?>