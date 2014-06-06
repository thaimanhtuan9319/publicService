<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_docform($id) {
    $sql = "select * from tai_lieu WHERE Id_dich_vu = '".$id."'";
    return db_select_list($sql);
}

function get_list_service() {
    $sql = "select * from dich_vu_cong";
    return db_select_list($sql);
}
?>
