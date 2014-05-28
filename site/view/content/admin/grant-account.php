<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/grant-account.php');
db_connect();
$result = get_list_user();
?>
    
<div id="content">
    <div>
        <div id="notification"></div>
        <h3>Lựa chọn tài khoản </h3>
        <br>
        <form method="POST" action="index.php?action=admin/grant-account" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['Username'].">".$item['Username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        <br>
        <h3>Lựa chọn cấp quyền </h3>
         <select name="user_type">
             <option value="1">Tài khoản Admin</option>
             <option value="2">Tài khoản Cán bộ</option>
             <option value="3">Tài khoản thường</option>
        </select>
        <div style="height: 30px"></div>
        <input type="submit" name="submitted" value="Cấp quyền">
        </form>
    </div>
</div>