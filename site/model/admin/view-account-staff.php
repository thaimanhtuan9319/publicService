<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_user_staff() {
    $sql = "select * from can_bo order by Id_don_vi_quan_ly";
    return db_select_list($sql);
}
