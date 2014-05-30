<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/delete-account-admin.php');
db_connect();
$result = get_list_user_admin();
?>
    
<div id="content">
    <h3>Lựa chọn tài khoản admin cần xóa</h3>
    <form method="POST" action="index.php?action=admin/delete-account-admin" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['Username'].">".$item['Username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        
        <input name="submited" type="submit" value="Xóa">
    </form>
</div>