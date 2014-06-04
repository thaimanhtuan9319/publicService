<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die('Request not found');
$id_canbo = $_SESSION['id_canbo'];
$id_coquan = $_SESSION['id_coquan'];

//echo $id_canbo;
//echo $id_coquan;

if(isset($_POST['submitted'])){
    $cauhoi = $cautraloi = '';
    
    $cauhoi = $_POST['cauhoi_faq'];
    $cautraloi = $_POST['cautraloi_faq'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $con = mysql_connect($host,$user,$pass) 
          or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
          or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
    $sql = "insert into faq(cau_hoi, cau_tra_loi, can_bo_id_can_bo, Id_don_vi_quan_ly) "
                . "values ('$cauhoi', '$cautraloi', '$id_canbo', '$id_coquan')";
        
    if (!mysql_query($sql)) { 
        die('Error: ' . mysql_error($con));
    }
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/staff-success");
    
//    echo $cauhoi;
//    echo $cautraloi;
    exit();
}


