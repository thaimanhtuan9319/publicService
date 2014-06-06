<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/delete-account-staff.php');
db_connect();
$result = get_list_user_staff();
?>

<div id="content"  style="width: 750px">
    <div style="margin-left: 150px">
        <h2 style="font-weight: bold;font-size: 19pt;margin-top: 15px;overflow: hidden;">Xóa tài khoản cán bộ</h2>
        <div style="height: 30px"></div>   
        <form method="POST" action="" accept-charset='UTF-8'>
            <fieldset class="fieldset">
                <h3   class="create-account-label">Lựa chọn tài khoản cán bộ cần xóa</h3>
                <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['username'].">".$item['username']."</option>\n";
            }
            echo $pulldown;
        ?>
                </select>
                <div style="height: 30px"></div>
                <input class="style-button" name="submited" type="submit" value="Xóa">
            </fieldset>
        </form>
    </div>
</div>