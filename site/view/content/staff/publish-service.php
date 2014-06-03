<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/publish-service.php');
db_connect();
$result = get_list_dichvu();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

<body>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Công bố dịch vụ</h3>
    <div style="height: 20px"></div>
    <form method="post" action="index.php?action=staff/publish-service">
        <fieldset>
            <span class="title">Lựa chọn dịch vụ cần công bố</span>
            <div style="height: 20px"></div>
            <select name="tendichvu">
               <?php 
                    $pulldown = '<option></option>';
                    foreach ($result as $item) {
                        $pulldown .= "<option value=".$item['Id_dich_vu'].">".$item['ten_dich_vu']."</option>\n";
                    }
                    echo $pulldown;
                ?>
            </select>
            <div style="height: 20px"></div>
             <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Công bố dịch vụ" name="submited">
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>