<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
require ('system/database.php');
    
function get_list_donvi(){
    $sql = 'select * from don_vi_quan_ly';
    return db_select_list($sql);
}
