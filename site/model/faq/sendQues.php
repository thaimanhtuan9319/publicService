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

$cauhoi = $don_vi = $tieu_de = $trang_thai = '';

if(isset($_POST['submitQues'])){  
            //Lay gia tri input
    $cau_hoi = $_POST['sendQues'];
    $don_vi = $_POST['select_dvgd'];
    $tieu_de = $_POST['titleQues'];
    $trang_thai = "0";
    $cau_tra_loi = "";
    
    require SYSPATH.('datetime.php');
        /**
 * echo $tieu_de;
 *         echo $cau_hoi;
 *         echo $don_vi;]
 *         echo $tieu_de;
 *         echo $trang_thai;
 *         echo $datetime;
 */
    //Neu khong loi thi insert
    if($cau_hoi != "" and $don_vi != "0"){
        db_connect();            
        
        $data = array(
            "tieu_de" => $tieu_de,
            "cau_hoi" => $cau_hoi,
            "trang_thai" => $trang_thai,
            "ngay_gui" => $datetime,
            "Id_don_vi_quan_ly" => $don_vi,
            "cau_tra_loi" => $cau_tra_loi
        );
        
        db_insert('hoi_dap', $data);
        db_disconnect();
        echo "Gửi câu hỏi thành công";
    }   
}
?>