<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_user() {
    $sql = 'select * from users';
    return db_select_list($sql);
}
