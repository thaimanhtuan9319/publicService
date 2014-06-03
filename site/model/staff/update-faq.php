<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die('Request not found');

if(isset($_POST['submitted'])){
    $cauhoi = $cautraloi = '';
    
    $cauhoi = $_POST['cauhoi_faq'];
    $cautraloi = $_POST['cautraloi_faq'];
    
    $con=mysqli_connect("localhost","root","","public_service");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $sql = "insert into faq(cau_hoi, cau_tra_loi) "
                . "values ('$cauhoi', '$cautraloi')";
        
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
        
    mysqli_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
       ."/index.php?action=staff/success");
    
//    echo $cauhoi;
//    echo $cautraloi;
    exit();
}


