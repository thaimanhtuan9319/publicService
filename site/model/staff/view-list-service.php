<?php

/* 
 * Author: Tuan ThaiManh
 */
require SYSPATH.('database.php');

function get_list_service() {
    $sql = "select * from dich_vu_cong";
    return db_select_list($sql);
}
