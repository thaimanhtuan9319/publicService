<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die('Request not found');
require SYSPATH.('database.php');   

function get_list_dvql() {
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

$noi_dung = $don_vi = $tieu_de = '';

if(isset($_POST['submitReport'])){  
    //Lay gia tri input
    $noi_dung = $_POST['sendReport'];
    $don_vi = $_POST['select_dvgy'];
    $tieu_de = $_POST['titleReport'];

    if($noi_dung != "" and $don_vi != "0"){
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
        
        $sql = "insert into y_kien_phan_hoi(tieu_de,noi_dung,Id_don_vi_quan_ly)
              values ('".$noi_dung."', '".$tieu_de."', '".$don_vi."');";
        
        mysql_query($sql);
        mysql_close();
        echo "Gửi ý kiến góp ý thành công";
    }   
}

?>