<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Khai báo dịch vụ công</h3>
    <div style="height: 20px"></div>
    <form method="post" action="index.php?action=staff/create-new-service">
        <fieldset>
            <span class="title">Nhập tên dịch vụ</span>
            <div style="height: 20px"></div>
            <input type="text" name="ServiceName">
            <div style="height: 20px"></div>
            <span class="title">Lựa chọn đơn vị quản lý</span>
            <div style="height: 20px"></div>
            <select name="">
                <option value="Công an quận">Công an quận</option>
                <option value="Phòng giáo dục">Phòng giáo dục</option>
                <option value="Phòng kế hoạch đầu tư">Phòng kế hoạch đầu tư</option>
                <option value="Phòng môi trường">Phòng môi trường</option>
                <option value="Phòng tài chính">Phòng tài chính</option>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Mô tả dịch vụ</span>
            <div style="height: 20px"></div>
            <textarea name=""></textarea>
            <div style="height: 20px"></div>
            <span class="title">Lựa chọn mức độ cung cấp dịch vụ</span>
            <div style="height: 20px"></div>
            <select name="">
                <option value="1">Mức độ 1</option>
                <option value="2">Mức độ 2</option>
                <option value="3">Mức độ 3</option>
                <option value="4">Mức độ 4</option>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Tài liệu liên quan</span>
            <div style="height: 20px"></div>
            <input type="file" name="">
            <input type="submit" value="Tải lên" name="attach">
            <div style="height: 20px"></div>
            <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Khai báo dịch vụ" name="create">
            </div>
        </fieldset>
    </form>
</div>