<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require SYSPATH.('database.php');

function get_list_dichvu(){
    $sql = 'select * from dich_vu_cong';
    return db_select_list($sql);
}

function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    $id = $_POST['Id_dichvu'];
    $serviceName = $_POST['ServiceName'];
    $don_vi = $_POST['phongban'];
    $mota = $_POST['mo_ta'];
    $mucdocungcap = $_POST['muc_do_cung_cap'];
    $congbo = $_POST['trang_thai_cong_bo'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $con = mysql_connect($host,$user,$pass) 
        or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
        or die("Can't select database!");
    mysql_query("SET NAMES utf8");
    
    
   $sql = "update public_service.dich_vu_cong set ten_dich_vu='".$serviceName."', mo_ta='"
           .$mota."', Id_don_vi_quan_ly='".$don_vi."', muc_do_cung_cap='".$mucdocungcap."',"
           . " trang_thai_cong_bo='".$congbo."' where dich_vu_cong.Id_dich_vu='".$id."'";
        
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
    
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/staff-success");

    exit();
}