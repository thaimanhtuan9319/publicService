<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/modify-service.php');
db_connect();
$result1 = get_list_dichvu();
$result2 = get_list_donvi();
?>
<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
    <h3 style="text-align: center">Thay đổi thông tin dịch vụ công</h3>
    <div style="height: 20px"></div>
    <form method="POST" action="">
        <fieldset class="fieldset">
            <span class="title">Lựa chọn dịch vụ cần chỉnh sửa</span>
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
            <span class="title">Tên dịch vụ</span>
            <div style="height: 20px"></div>
            <input type="text" name="ServiceName">
            <div style="height: 20px"></div>
            <span class="title">Đơn vị quản lý</span>
            <div style="height: 20px"></div>
            <select name="phongban">
               <?php 
                    $pulldown = '<option></option>';
                    foreach ($result2 as $item) {
                        $pulldown .= "<option value=".$item['Id_don_vi_quan_ly'].">".$item['ten_don_vi_quan_ly']."</option>\n";
                    }
                    echo $pulldown;
                ?>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Mô tả dịch vụ</span>
            <div style="height: 20px"></div>
            <textarea name="mo_ta"></textarea>
            <div style="height: 20px"></div>
            <span class="title">Lựa chọn mức độ cung cấp dịch vụ</span>
            <div style="height: 20px"></div>
            <select name="muc_do_cung_cap">
                <option value="1">Mức độ 1</option>
                <option value="2">Mức độ 2</option>
                <option value="3">Mức độ 3</option>
                <option value="4">Mức độ 4</option>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Trạng thái công bố dịch vụ</span>
            <div style="height: 20px"></div>
            <select name="trang_thai_cong_bo">
                <option value="0">Ngừng công bố</option>
                <option value="1">Công bố</option>
            </select>
            <p><?php if(isset($mess)) echo $mess?></p>
            <div style="height: 20px"></div>
            <div style="text-align: center">
                <input class="style-button" style="width: 120px;height: 40px"
                       type="submit" value="Cập nhật" name="submited">
            </div>
                
        </fieldset>
    </form>
    </div>
</div>