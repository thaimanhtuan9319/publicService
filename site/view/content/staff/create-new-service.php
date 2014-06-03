<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/create-new-service.php');
db_connect();
$result = get_list_donvi();
    
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Khai báo dịch vụ công</h3>
    <div style="height: 20px"></div>
    <form method="POST" action="index.php?action=staff/create-new-service" 
          enctype="multipart/form-data" accept-charset="utf8">
        <fieldset>
            <span class="title">Nhập tên dịch vụ</span>
            <div style="height: 20px"></div>
            <input type="text" name="serviceName">
            <div style="height: 20px"></div>
            <span class="title">Lựa chọn đơn vị quản lý</span>
            <div style="height: 20px"></div>
            <select name="Id_donviquanly">
                <?php 
                    $pulldown = '<option></option>';
                    foreach ($result as $item) {
                        $pulldown .= "<option value=".$item['Id_don_vi_quan_ly'].">".$item['ten_don_vi_quan_ly']."</option>\n";
                    }
                    echo $pulldown;
                ?>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Mô tả dịch vụ</span>
            <div style="height: 20px"></div>
            <textarea name="mota"></textarea>
            <div style="height: 20px"></div>
            <span class="title">Lựa chọn mức độ cung cấp dịch vụ</span>
            <div style="height: 20px"></div>
            <select name="mucdocungcap">
                <option value="1">Mức độ 1</option>
                <option value="2">Mức độ 2</option>
                <option value="3">Mức độ 3</option>
                <option value="4">Mức độ 4</option>
            </select>
            <div style="height: 20px"></div>
            <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Khai báo dịch vụ" name="submitted">
            </div>
        </fieldset>
    </form>
</div>