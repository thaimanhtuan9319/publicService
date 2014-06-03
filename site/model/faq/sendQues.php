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

$cauhoi = $don_vi = $tieu_de = $trang_thai = '';

if(isset($_POST['submitQues'])){  
            //Lay gia tri input
    $cau_hoi = $_POST['sendQues'];
    $don_vi = $_POST['select_dvgd'];
    $tieu_de = $_POST['titleQues'];
    $trang_thai = "0";
    
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
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
            
              
        $sql = "insert into hoi_dap(tieu_de,noi_dung,trang_thai,ngay_gui,Id_don_vi_quan_ly)
              values ('".$tieu_de."', '".$cau_hoi."', '".$trang_thai."', '".$datetime."', '".$don_vi."');";
        mysql_query($sql);
        mysql_close();
        echo "Gửi câu hỏi thành công";
    }   
}
?>