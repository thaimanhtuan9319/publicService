<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

function get_list_question() {
    $sql = "select * from hoi_dap";
    return db_select_list($sql);
}

