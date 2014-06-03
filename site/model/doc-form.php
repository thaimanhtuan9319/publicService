<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_docform() {
    $sql = 'select * from tai_lieu';
    return db_select_list($sql);
}
?>