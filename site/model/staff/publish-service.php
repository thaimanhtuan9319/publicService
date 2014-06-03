<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('system/database.php');

function get_list_dichvu(){
    $sql = 'select * from dich_vu_cong';
    return db_select_list($sql);
}

if(isset($_POST['submited'])){
    $id_dich_vu = '';
}