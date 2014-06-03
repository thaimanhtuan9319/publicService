<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

if(isset($_POST['submited'])){
    $id = $_POST['id'];
    $answer = $_POST['answer'];
    $trang_thai = 1;
    $host = "localhost";
    $user = "root";
    $pass = "";
    $con = mysql_connect($host,$user,$pass) 
          or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
          or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
    $sql = "update public_service.hoi_dap set tra_loi='".$answer."', trang_thai='"
           .$trang_thai."' where hoi_dap.Id_hoi_dap='".$id."'";
        
    if (!mysql_query($sql)) { 
        die('Error: ' . mysql_error($con));
    }
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/staff-success");
    
//    echo $cauhoi;
//    echo $cautraloi;
    exit();
}