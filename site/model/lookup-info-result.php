<?php
    
/* 
 * Author: Tuan ThaiManh
 */
require SYSPATH.('database.php');
    
function get_list_result($keyname, $keydonvi){
    $sql = "select * from dich_vu_cong where ten_dich_vu like '%".$keyname.
                "%' and Id_don_vi_quan_ly='".$keydonvi."'";;
    return db_select_list($sql);
}
?>
