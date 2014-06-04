<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

function get_list_question() {
    $query = mysql_query("select * from can_bo where username = '".$_SESSION['username']."'");
    $rs = mysql_fetch_array($query);
    $id_coquan = $rs['Id_don_vi_quan_ly'];
    $sql = "select * from hoi_dap where Id_don_vi_quan_ly='".$id_coquan."'";
    return db_select_list($sql);
}

