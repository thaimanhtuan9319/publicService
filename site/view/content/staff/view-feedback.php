<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/view-feedback.php');
db_connect();
$result = get_list_feedback();
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Danh sách ý kiến phản hồi</h3>
    <div style="height: 20px"></div>
    <table class="table">
        <tr class="table-head">
            <td style="width: 150px;text-align: center">Người gửi</td>
            <td style="width: 450px;text-align: center">Nội dung</td>
        </tr>
        <tbody>
            <?php 
			 
                foreach($result as $item){
            ?>
            <tr>
                <td><?php echo $item['tieu_de']; ?></a></td>
                <td><?php echo $item['noi_dung']; ?></td>
                </tr>
            <?php }?>    
        </tbody>
    </table>
</div>
