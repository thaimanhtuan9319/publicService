<?php

/* 
 * Author: Tuan ThaiManh
 */

require SYSPATH.('database.php');

function get_list_feedback() {
    //$id_coquan = $_SESSION['id_coquan'];
    $query = mysql_query("select * from can_bo where username = '".$_SESSION['username']."'");
    $rs = mysql_fetch_array($query);
    $id_coquan = $rs['Id_don_vi_quan_ly'];
    $sql = "select * from y_kien_dong_gop where Id_don_vi_quan_ly='".$id_coquan."'";
    return db_select_list($sql);
}
