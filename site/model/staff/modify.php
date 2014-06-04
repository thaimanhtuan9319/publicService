<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

if(isset($_POST['submited'])){
    $id = $_POST['id'];
    $answer = $_POST['answer'];
    $trang_thai = 1;
    
    db_connect();
    
    $sql = "update public_service.hoi_dap set cau_tra_loi='".$answer."', trang_thai='"
           .$trang_thai."' where hoi_dap.Id_hoi_dap='".$id."'";
        
    if (!mysql_query($sql)) { 
        die('Error: ' . mysql_error($con));
    }
    db_disconnect();
    header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/staff-success");
    
//    echo $cauhoi;
//    echo $cautraloi;
    exit();
}