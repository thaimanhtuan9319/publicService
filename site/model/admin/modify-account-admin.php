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
    $password = md5($_POST['password']);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    db_connect();
    
   $data = array(
            "Firstname" => $firstname,
            "Lastname" => $lastname,
            "Username" => $username,
            "Password" => $password,
            "User_type" => $user_type,
            "Email" => $email);
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
    
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");

    exit();
}