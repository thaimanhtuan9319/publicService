<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/delete-account.php');
db_connect();
$result = get_list_user();
?>
    
<div id="content">
    <h3>Lựa chọn tài khoản cần xóa</h3>
    <form method="POST" action="index.php?action=admin/delete-account" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['Username'].">".$item['Username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        
        <input name="submitted" type="submit" value="Xóa">
    </form>
</div>