<?php
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND');
/* 
 * Author: Tuan ThaiManh
 */
function get_list_user() {
    $sql = 'select * from users';
    return db_select_list($sql);
}
