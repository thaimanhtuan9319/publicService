<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/answer.php');
db_connect();
$result = get_list_question();
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Trả lời công dân</h3>
    <div style="height: 20px"></div>
    <table class="table">
        <tr class="table-head">
            <td style="width: 250px">Tiêu đề</td>
            <td style="width: 250px">Nội dung</td>
            <td style="width: 100px">Trạng thái</td>
            <td style="width: 100px">Ngày gửi</td>
            <td style="width: 100px"></td>
        </tr>
        <tbody>
            <?php 
			 
                foreach($result as $item){
            ?>
            <tr>
                <td><?php echo $item['tieu_de']; ?></a></td>
                <td><?php echo $item['noi_dung']; ?></a></td>
                <td><?php
                    switch ($item['trang_thai']){
                        case 0:
                            echo "Chưa trả lời";
                            break;
                        case 1:
                            echo "Đã trả lời";
                            break;
                        default :
                            break;
                    }
                        ?></td>
                <td><?php echo $item['ngay_gui']; ?></td>
                <td><?php
                    switch ($item['trang_thai']){
                        case 0:
                            $id = $item['Id_hoi_dap'];
                            
                            break;
                        case 1:
                            echo "<a href='#'>Chỉnh sửa</a>";
                            break;
                        default :
                            break;
                    }
                        ?></td>
                </tr>
            <?php }?>    
        </tbody>
    </table>
</div>