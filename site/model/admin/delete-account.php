<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require ('system/database.php');
    
if(!defined('SYSPATH')) die('Request not found');
    
$username = '';
    
    
function get_list_user() {
    $sql = 'select * from users';
    return db_select_list($sql);
}
    
if(isset($_POST['submitted'])){
    $username = $_POST['username'];
        
    $con=mysqli_connect("localhost","root","","public_service");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        
  $sql = "DELETE FROM public_service.users WHERE users.Username = '".$username."'";
      
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
        
    mysqli_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");
    exit();
}