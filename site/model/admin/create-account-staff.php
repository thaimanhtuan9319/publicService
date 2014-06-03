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
    $password = md5($_POST['password']);
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
            
            
        db_connect();
        $data = array(
            "ten_can_bo" => $name,
            "dien_thoai" => $phone,
            "email" => $email,
            "username" => $username,
            "password" => $password,
            "id_don_vi_quan_ly" => $phongban);
                
        db_insert('can_bo', $data);
        $mess = 'Tạo tài khoản thành công';
            
        db_disconnect();
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");
        exit();
//    }   
}
?>