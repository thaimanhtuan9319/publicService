<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_user_member() {
    $sql = "select * from users where User_type = '2'";
    return db_select_list($sql);
}
