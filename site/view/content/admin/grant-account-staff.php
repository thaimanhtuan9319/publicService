<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/grant-account-staff.php');
db_connect();
$result = get_list_user_staff();
$result2 = get_list_donvi();
?>
    
<div id="content">
    <div>
        <div id="notification"></div>
        <h3>Lựa chọn tài khoản cán bộ</h3>
        <br>
        <form method="POST" action="index.php?action=admin/grant-account-staff" accept-charset='UTF-8'>
        <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['username'].">".$item['username']."</option>\n";
            }
            echo $pulldown;
        ?>
        </select>
        <br>
        <h3>Lựa chọn đơn vị trực thuộc </h3>
         <select name="phongban">
            <?php 
                    $pulldown = '<option></option>';
                    foreach ($result2 as $item2) {
                        $pulldown .= "<option value=".$item2['Id_don_vi_quan_ly'].">".$item2['ten_don_vi_quan_ly']."</option>\n";
                    }
                    echo $pulldown;
                ?>
        </select>
        <div style="height: 30px"></div>
        <input type="submit" name="submited" value="Cấp quyền">
        </form>
    </div>
</div>