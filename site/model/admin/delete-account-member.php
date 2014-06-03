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
        
    $host = "localhost";
        $user = "root";
        $pass = "";
        
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
        
    $sql = "DELETE FROM public_service.users WHERE users.Username = '".$username."'";
      
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
            
        mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/admin-success");
    exit();
}