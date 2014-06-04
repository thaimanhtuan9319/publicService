<?php
    
/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');  
/*
 * Nhap form
 */

function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(isset($_POST['submitted'])){
    
    $serviceName = $iddonviquanly = $mota = $mucdocungcap = '';
    $trangthaicongbo = 0;
    
    $serviceName = $_POST['serviceName'];
    $mota = $_POST['mota'];
    $mucdocungcap = $_POST['mucdocungcap'];
    $iddonviquanly = $_POST['Id_donviquanly'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $con = mysql_connect($host,$user,$pass) 
          or die("Can't connect to database!");
    mysql_select_db("public_service",$con) 
          or die("Can't select database!");
    mysql_query("SET NAMES utf8");
 
    
    //$con=mysqli_connect("localhost","root","","public_service");
   // mysqli_set_charset($con, "utf8");
    //if (mysqli_connect_errno()) {
    //    echo "Failed to connect to MySQL: " . mysqli_connect_error();
   // }
    //thử xem
    $sql = "insert into dich_vu_cong(ten_dich_vu, mo_ta, muc_do_cung_cap, trang_thai_cong_bo, id_don_vi_quan_ly) "
                . "values ('$serviceName', '$mota', $mucdocungcap,$trangthaicongbo,$iddonviquanly)";
    
    if (!mysql_query($sql)) { 
        die('Error: ' . mysql_error($con));
    }
    mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST']."/publicService/appManager/staff-success");
    exit();
}

