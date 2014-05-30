<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_answered() {
    $sql = 'select * from hoi_dap';
    return db_select_list($sql);
}
?>