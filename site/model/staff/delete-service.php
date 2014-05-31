<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

function get_list_dichvu(){
    $sql = 'select * from dich_vu_cong';
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    $id = $_POST['Id_dichvu'];
        
    $host = "localhost";
        $user = "root";
        $pass = "";
        
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
        
    $sql = "DELETE FROM public_service.dich_vu_cong WHERE dich_vu_cong.Id_dich_vu = '".$id."'";
      
    if (!mysql_query($sql)) {
            die('Error: ' . mysql_error($con));
        }
            
        mysql_close($con);
    header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=staff/success");
    exit();
}