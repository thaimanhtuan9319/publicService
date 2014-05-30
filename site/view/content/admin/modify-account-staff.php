<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/modify-account-staff.php');
db_connect();
$result = get_list_user_staff();
?>
    
<div id="content">
    <h3>Lựa chọn tài khoản cán bộ</h3>
    <form method="POST" action="index.php?action=admin/modify-account-staff" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['username'].">".$item['username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        <h4>Thay đổi mật khẩu</h4>
        <input type="text" name="password">
        <h4>Thay đổi Tên</h4>
        <input type="text" name="name">
        <h4>Thay đổi số điện thoại</h4>
        <input type="text" name="phone">
        <h4>Thay đổi Email</h4>
        <input type="text" name="email">
        <div style="height: 20px"></div>
        <input name="submited" type="submit" value="Cập nhật">
    </form>
</div>