<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require ('system/database.php');
    
if(!defined('SYSPATH')) die('Request not found');
    
$username = '';
    
    
function get_list_user_member() {
    $sql = "select * from users where User_type = '2'";
    return db_select_list($sql);
}

    
if(isset($_POST['submited'])){
    $username = $_POST['username'];
        
    db_connect();
        
    $sql = "DELETE FROM public_service.users WHERE users.Username = '".$username."'";
      
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
            
    db_disconnect();
    echo "Xóa tài khoản thành công";
    exit();
}