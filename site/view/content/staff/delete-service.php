<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/delete-service.php');
db_connect();
$result1 = get_list_dichvu();
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Hủy dịch vụ</h3>
    <div style="height: 20px"></div>
    <form method="post" action="index.php?action=staff/delete-service">
        <fieldset>
            <span class="title">Lựa chọn dịch vụ cần hủy</span>
            <div style="height: 20px"></div>
            <select name="Id_dichvu">
                <?php 
                    $pulldown = '<option></option>';
                    foreach ($result1 as $item) {
                        $pulldown .= "<option value=".$item['Id_dich_vu'].">".$item['ten_dich_vu']."</option>\n";
                    }
                    echo $pulldown;
                ?>
            </select>
            <div style="height: 20px"></div>
            <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Hủy dịch vụ" name="submited">
            </div>
        </fieldset>
    </form>
</div>