<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/delete-account-member.php');
db_connect();
$result = get_list_user_member();
?>
    
<div id="content">
    <h3>Lựa chọn tài khoản công dân cần xóa</h3>
    <form method="POST" action="" accept-charset='UTF-8'>
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