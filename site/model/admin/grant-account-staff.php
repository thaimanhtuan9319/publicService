<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

function get_list_user_staff() {
    $sql = "select * from can_bo";
    return db_select_list($sql);
}

if(!defined('SYSPATH')) die('Request not found');

$username = '';
$phongban = '';

if(isset($_POST['submited'])){
    $username = $_POST['username'];
    $phongban = $_POST['phongban'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
        
    $con = mysql_connect($host,$user,$pass) 
        or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
        or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
      $sql = "update public_service.can_bo set Id_don_vi_quan_ly='".$phongban.
           "' where can_bo.username='".$username."'";
        
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
    
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");

    exit();
}
