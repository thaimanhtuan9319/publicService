<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/delete-account-staff.php');
db_connect();
$result = get_list_user_staff();
?>
    
<div id="content">
    <h3>Lựa chọn tài khoản cán bộ cần xóa</h3>
    <form method="POST" action="" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['username'].">".$item['username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        
        <input name="submited" type="submit" value="Xóa">
    </form>
</div>