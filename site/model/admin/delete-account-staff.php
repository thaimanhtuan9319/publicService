<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require ('system/database.php');
    
if(!defined('SYSPATH')) die('Request not found');
    
$username = '';
    
    
function get_list_user_staff() {
    $sql = "select * from can_bo";
    return db_select_list($sql);
}
    
if(isset($_POST['submited'])){
    $username = $_POST['username'];
        
    db_connect();
        
    $sql = "DELETE FROM public_service.can_bo WHERE can_bo.username = '".$username."'";
      
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
            
    db_disconnect();
    echo "Xóa tài khoản thành công";
    exit();
}