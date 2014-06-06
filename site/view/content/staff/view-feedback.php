<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/view-feedback.php');
db_connect();
$result = get_list_feedback();
?>
<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
        <h3 style="text-align: center">Ý kiến đóng góp</h3>
        <div style="height: 20px"></div>
        <div>
            <table class="table" style="border-collapse: collapse; background-color: whitesmoke;" >
                <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                    <tr>
                <fieldset class="fieldset">
                    <legend class="main" style="font-weight: bold;"><?php echo $item['tieu_de']; ?></legend>
                    <?php echo $item['ngay_gui']; ?><br />
                    <b>Người gửi: </b><?php echo $item['nguoi_gui']; ?><br />
                    <b>Nội dung: </b><?php echo $item['noi_dung']; ?> <br />     
                </fieldset>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>