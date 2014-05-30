<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_user_staff() {
    $sql = "select * from can_bo";
    return db_select_list($sql);
}
