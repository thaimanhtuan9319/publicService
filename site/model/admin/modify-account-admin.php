<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');

$id_user = $oldpassword = $newpassword = $repassword = '';
$oldpasswordMess = $newpasswordMess = $repasswordMess = '';

function get_list_user_admin() {
    $sql = "select * from users where User_type = '1'";
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    require 'site/model/validateInput.php'; 
    //require SYSPATH.('database.php');
    //lay password cu
    $id_user = $_POST['username'];
    //echo $username;
    db_connect();
    $sql = "select * from users where Id_user = '".$id_user."'";
    $query = mysql_query($sql);
    if($query == false) echo "Lỗi truy vấn";
    else{
        $row = mysql_fetch_array($query);
    }
    $checkpass = $row['Password'];
    //echo $checkpass;
    //Gan gia tri duoc nhap
    $oldpassword = md5($_POST['oldpassword']);
    $newpassword = md5($_POST['newpassword']);
    $repassword = md5($_POST['repassword']);
    
    //Kiem tra    
    if($oldpassword == $checkpass) $oldpasswordMess = 'Hợp lệ';
    else $oldpasswordMess = "Mật khẩu cũ không đúng";
    $newpasswordMess = check_password_input($newpassword);
    $repasswordMess = check_repassword_input($newpassword, $repassword);

    if($newpasswordMess == 'Hợp lệ' && $repasswordMess == 'Hợp lệ' && $oldpasswordMess = 'Hợp lệ'){
        
        db_connect();
        
       $sql = "update public_service.users set Password='".$newpassword."' where users.Id_user='".$id_user."'";
            
        if (!mysql_query($sql)) {
                die('Error: ' . mysql_error($con));
            }
        
        db_disconnect();
        echo "Thay đổi tài khoản thành công!";
    
        exit();
    }
}