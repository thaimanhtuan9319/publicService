<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');

$username = $firstname = $lastname = $password = $email = '';


function get_list_user() {
    $sql = 'select * from users';
    return db_select_list($sql);
}

if(isset($_POST['submitted'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $con=mysqli_connect("localhost","root","","public_service");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
   $sql = "update public_service.users set firstName='".$firstname."', lastname='"
           .$lastname."', password='".$password."', email='".$email.
           "' where users.username='".$username."'";
        
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    
    mysqli_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");

    exit();
}