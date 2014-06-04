<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
$name = $username = $password = $repassword = $phongban = '';
$nameMess = $usernameMess = $passwordMess = $repasswordMess = '';

$mess = '';

function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    require 'site/model/validateInput.php'; 
        
    //Lay gia tri input
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);
    $phongban = $_POST['phongban'];
        
    //Xac thuc input
    $nameMess = check_firstname_input($name);
    $usernameMess = check_username_input($username, 'can_bo');
    $passwordMess = check_password_input($password);
    $repasswordMess = check_repassword_input($password, $repassword);
    
    //Neu khong loi thi nhay toi trang Success
    if($nameMess == 'Hợp lệ' && $usernameMess == 'Hợp lệ' && $passwordMess == 'Hợp lệ' && $repasswordMess == 'Hợp lệ'){
        //require SYSPATH.('database.php');
            
            
        db_connect();
        
        $data = array(
            "ten_can_bo" => $name,
            "username" => $username,
            "password" => $password,
            "Id_don_vi_quan_ly" => $phongban
        );
        
        db_insert('can_bo', $data);
        echo 'Tạo tài khoản thành công';
            
        db_disconnect();

        exit();
   }   
}
?>