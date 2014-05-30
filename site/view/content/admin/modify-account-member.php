<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/modify-account-member.php');
db_connect();
$result = get_list_user_member();
?>
    
<div id="content">
    <h3>Lựa chọn tài khoản công dân</h3>
    <form method="POST" action="index.php?action=admin/modify-account-member" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['Username'].">".$item['Username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        <h4>Thay đổi mật khẩu</h4>
        <input type="text" name="password">
        <h4>Thay đổi Tên</h4>
        <input type="text" name="firstname">
        <h4>Thay đổi Họ</h4>
        <input type="text" name="lastname">
        <h4>Thay đổi Email</h4>
        <input type="text" name="email">
        <div style="height: 20px"></div>
        <input name="submited" type="submit" value="Cập nhật">
    </form>
</div>