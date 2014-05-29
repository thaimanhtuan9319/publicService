<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/modify-service.php');
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Thay đổi thông tin dịch vụ công</h3>
    <div style="height: 20px"></div>
    <form method="POST" action="index.php?action=staff/modify-service" enctype="multipart/form-data">
        <fieldset>
            <span class="title">Lựa chọn dịch vụ cần chỉnh sửa</span>
            <div style="height: 20px"></div>
            <select>
                <option value="">Dịch vụ 1</option>
                <option value="">Dịch vụ 2</option>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Tên dịch vụ</span>
            <div style="height: 20px"></div>
            <input type="text" name="ServiceName">
            <div style="height: 20px"></div>
            <span class="title">Đơn vị quản lý</span>
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
            <input type="file" name="file_upload">
            <input type="submit" value="Tải lên" name="attach">
            <p><?php if(isset($mess)) echo $mess?></p>
            <div style="height: 20px"></div>
            <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Cập nhật dịch vụ" name="create">
            </div>
                
        </fieldset>
    </form>
</div>