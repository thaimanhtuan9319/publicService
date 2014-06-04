<?php

/* 
 * Author: Tuan ThaiManh
 */

$firstname = $lastname = $username = $password = $repassword = $email = '';
$firstNameMess = $lastNameMess = $usernameMess = $passwordMess = $repasswordMess = $emailMess = '';
if(isset($_POST['submitted'])){
    require 'site/model/validateInput.php'; 
    
    //Lay gia tri input
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);
    $email = $_POST['email'];
    
    //Xac thuc input
    $firstNameMess = check_firstname_input($firstname);
    $lastNameMess = check_lastname_input($lastname);
    $usernameMess = check_username_input($username, 'users');
    $passwordMess = check_password_input($password);
    $repasswordMess = check_repassword_input($password, $repassword);
    $emailMess = check_email_input($email);
    
    //Neu khong loi thi nhay toi trang Success
    if($firstNameMess == 'Hợp lệ' && $lastNameMess == 'Hợp lệ' && $usernameMess == 'Hợp lệ'
    && $passwordMess == 'Hợp lệ' && $repasswordMess == 'Hợp lệ' && $emailMess == 'Hợp lệ'){
        require SYSPATH.('database.php');
        $user_type = 1;
        
        db_connect();
        
        $data = array(
            "Firstname" => $firstname,
            "Lastname" => $lastname,
            "Username" => $username,
            "Password" => $password,
            "User_type" => $user_type,
            "Email" => $email
        );
        
        db_insert('users', $data);
        db_disconnect();
        echo "Tạo tài khoản thành công!";
        exit();
    }   
}
?>