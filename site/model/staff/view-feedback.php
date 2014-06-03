<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

function get_list_feedback() {
    $id_coquan = $_SESSION['id_coquan'];
    $sql = "select * from y_kien_phan_hoi where Id_don_vi_quan_ly='".$id_coquan."'";
    return db_select_list($sql);
}
