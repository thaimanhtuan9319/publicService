<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');

$username = $firstname = $lastname = $password = $email = '';


function get_list_user_admin() {
    $sql = "select * from users where User_type = '1'";
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
        
    $con = mysql_connect($host,$user,$pass) 
        or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
        or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
   $sql = "update public_service.users set firstName='".$firstname."', lastname='"
           .$lastname."', password='".$password."', email='".$email.
           "' where users.username='".$username."'";
        
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
    
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/admin-success");

    exit();
}