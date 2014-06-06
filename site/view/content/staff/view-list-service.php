<?php

/* 
 * Author: Tuan ThaiManh
 */


if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require 'site/model/staff/view-list-service.php';
db_connect();
$result = get_list_service();
?>
<div id="content" style="width: 800px">
    <div style="margin-left: 150px">
        <h3 style="text-align: center">Danh sách dịch vụ công</h3>
        <div style="height: 20px"></div>
        <table id="tfhover" class="tftable" border="1">
            <tr>
                <th style="width: 120px">Tên dịch vụ</th>
                <th style="width: 120px">Đơn vị quản lý</th>
                <th style="width: 100px">Mức độ cung cấp</th>
                <th style="width: 100px">Mô tả dịch vụ</th>
                <th style="width: 100px">Trạng thái công bố</th>
            </tr>
            <tbody>
            <?php 
			 
                foreach($result as $item){
            ?>
                <tr>
                    <td><?php echo $item['ten_dich_vu']; ?></a></td>
                    <td><?php
                    switch ($item['Id_don_vi_quan_ly']){
                        case 1:
                            echo "Văn phòng HĐND-UBND";
                            break;
                        case 2:
                            echo "Phòng Tài chính – Kế hoạch";
                            break;
                        case 3:
                            echo "Phòng Tài nguyên – Môi trường";
                            break;
                        case 4:
                            echo "Phòng Nông nghiệp – PTNT";
                            break;
                        case 5:
                            echo "Phòng Kinh tế & Hạ tầng";
                            break;
                        case 6:
                            echo "Phòng Lao động – TBXH";
                            break;
                        case 7:
                            echo "Phòng Nội vụ";
                            break;
                        case 8:
                            echo "Thanh tra";
                            break;
                        case 9:
                            echo "Phòng Tư pháp";
                            break;
                        case 10:
                            echo "Phòng Văn hóa – Thông tin";
                            break;
                        case 11:
                            echo "Chi cục Thống kê";
                            break;
                        case 12:
                            echo "Phòng Y tế";
                            break;
                        case 13:
                            echo "Phòng Giáo dục – Đào tạo";
                            break;
                    }
                        ?></td>
                    <td><?php echo $item['muc_do_cung_cap']; ?></td>
                    <td><?php echo $item['mo_ta']; ?></td>
                    <td><?php 
                switch ($item['trang_thai_cong_bo']){
                        case 0:
                            echo "Chưa công bố";
                            break;
                        case 1:
                            echo "Đã công bố";
                            break;
                }
                ?></td>
                </tr>
            <?php }?>    
            </tbody>
        </table>
    </div>
</div>
