<?php

/* 
 * Author: Tuan ThaiManh
 */

?>
<!DOCTYPE html>
<html>
<head>
<link href="../../../public/css/lookup-info.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="content">
    <h2 id="title">Tra cứu thông tin hồ sơ</h2>
    <fieldset class="main">
        <legend class="main">Hướng dẫn tra cứu</legend>
        -Bước 1: Nhập mã hồ sơ (đây là mã được cung cấp sau khi đã hoàn tất hồ sơ)<br />
        -Bước 2: Chọn đơn vị tiếp nhận hồ sơ<br />
        -Bước 3: Chọn loại dịch vụ công đã sử dụng<br />
        -Bước 4: Nhấn nút 'Tra cứu' để tra cứu hồ sơ<br />
    </fieldset>
    <fieldset class="main">
        <legend class="main">Tra cứu</legend>
        <table>
            <tr>
                <td>Mã hồ sơ</td>
                <td><input type="text" name="mahoso" value="" style="width: 300px;"/></td>
            </tr>
            <tr>
                <td>Đơn vị tiếp nhận</td>
                <td><select name="select_coquan" id="select_coquan" style="width: 300px;">
                    <option value="">--Chọn cơ quan tiếp nhận--</option>
                    <option value="ThongTinTruyenThong">Sở Thông Tin và Truyền Thông</option>
                    <option value="GiaoThongVanTai">Sở Giao Thông Vận Tải</option>
                    <option value="LaoDongTBXaHoi">Sở Lao Động, Thương Binh và Xã Hội</option>
                    <option value="VanHoaTTDuLich">Sở Văn Hóa, Thể Thao và Du Lịch</option>
                    <option value="CôngThương">Sở Công Thương</option>
                    <option value="NgoaiVu">Sở Ngoại Vụ</option>
                </select></td>
            </tr>
            <tr>
                <td>Dịch vụ công sử dụng</td>
                <td><select name="select_dichvu" id="select_dichvu" style="width: 300px;">
                    <option value="">--Chọn loại dịch vụ--</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="lookup-info" value="Tra cứu" style="font: Segoe;"/></td>
            </tr>
        </table>
        
    </fieldset>
    </div>
    <div id="rightbar">
    
    </div>
</body>
</html>
