<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

function get_list_user_staff() {
    $sql = "select * from can_bo";
    return db_select_list($sql);
}
function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(!defined('SYSPATH')) die('Request not found');

$username = '';
$phongban = '';

if(isset($_POST['submited'])){
    $username = $_POST['username'];
    $phongban = $_POST['phongban'];
    
    db_connect();
    
      $sql = "update public_service.can_bo set Id_don_vi_quan_ly='".$phongban.
           "' where can_bo.username='".$username."'";
        
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
    
    db_disconnect();
    echo "Cấp quyền tài khoản thành công!";

    exit();
}
