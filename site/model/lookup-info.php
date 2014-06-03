<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require ('system/database.php');
    
function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    
    $tendichvu = $_POST['tendichvu'];
    $donvitiepnhan = $_POST['phongban'];
        
        
        $host = "localhost";
        $user = "root";
        $pass = "";
            //cái này c cần gì viết lại, gọi db_connect() là được mà
        $con = mysql_connect($host,$user,$pass) 
            or die("Can't connect to database!");
        mysql_select_db("public_service",$con) 
            or die("Can't select database!");
        mysql_query("SET NAMES utf8");
            
        $sql = "select * from dich_vu_cong where ten_dich_vu like '%".$tendichvu.
                "%' and Id_don_vi_quan_ly='".$donvitiepnhan."'";
        

        $result = mysql_query($sql);

        $row = mysql_fetch_array($result);
        mysql_close($con);
//        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
//           ."/index.php?action=lookup-info-data");
        
        echo "<div id=\"content\">";
        echo "<table><tr><td>Tên dịch vụ</td>
                <td>Mô tả</td>
                <td>Mức độ cung cấp</td></tr></table>";
        echo "</div>";
        
        
        exit();
//    }   
}