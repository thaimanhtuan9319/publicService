<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

function get_list_data($key) {
    $sql = "select * from dich_vu_cong where ten_dich_vu like '%".$key."%'";
    return db_select_list($sql);
}

function get_list_data_donvi($key) {
    $sql = "select * from don_vi_quan_ly where ten_don_vi_quan_ly like '%".$key."%'";
    return db_select_list($sql);
}
function get_list_data_tailieu($key) {
    $sql = "select * from tai_lieu where ten_tai_lieu like '%".$key."%'";
    return db_select_list($sql);
}
function get_list_data_faq($key) {
    $sql = "select * from faq where cau_hoi like '%".$key."%'";
    return db_select_list($sql);
}