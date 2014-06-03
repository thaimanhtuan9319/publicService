<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');

$name = $phone = $phongban = $password = $email = '';
$username = '';

function get_list_user_staff() {
    $sql = "select * from can_bo";
    return db_select_list($sql);
}


if(isset($_POST['submited'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
        
    $con = mysql_connect($host,$user,$pass) 
        or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
        or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
      $sql = "update public_service.can_bo set ten_can_bo='".$name."', password='"
           .$password."', dien_thoai='".$phone."', email='".$email.
           "' where can_bo.username='".$username."'";
        
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
    
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/admin-success");

    exit();
}