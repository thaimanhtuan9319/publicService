<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die('Request not found');
require SYSPATH.('database.php');  
require SYSPATH.('datetime.php'); 

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
    $nguoi_gui = $_SESSION['username'];
    if($noi_dung != "" and $don_vi != "0"){
        db_connect();
        
        $data = array(
            "tieu_de" => $tieu_de,
            "noi_dung" => $noi_dung,
            "Id_don_vi_quan_ly" => $don_vi,
            "nguoi_gui" => $nguoi_gui,
            "ngay_gui" => $datetime,
        );
        
        db_insert('y_kien_dong_gop', $data);
        db_disconnect();
        
        echo "Gửi ý kiến góp ý thành công";
    }   
}

?>