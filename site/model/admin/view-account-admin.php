<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_user_admin() {
    $sql = "select * from users where User_type = '1'";
    return db_select_list($sql);
}
