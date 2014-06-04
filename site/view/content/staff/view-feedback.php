<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/view-feedback.php');
db_connect();
$result = get_list_feedback();
?>
<div id="contentall">
    <h3 style="text-align: center">Ý kiến đóng góp</h3>
    <div style="height: 20px"></div>
    <div>
            <table class="table" style="border-collapse: collapse; background-color: whitesmoke;" >
                <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                    <tr>
                <fieldset class="main">
                    <legend class="main" style="font-weight: bold;"><?php echo $item['tieu_de']; ?></legend>
                    <?php echo $item['ngay_gui']; ?><br />
                    Người gửi: <?php echo $item['nguoi_gui']; ?><br />
                    Nội dung: <?php echo $item['noi_dung']; ?> <br />     
                </fieldset>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
</div>