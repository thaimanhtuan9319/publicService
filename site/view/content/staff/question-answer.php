<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/question-answer.php');
db_connect();
$result = get_list_question();
?>
<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
        <h3 style="text-align: center">Trả lời công dân</h3>
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
                    <b>Câu hỏi: </b><?php echo $item['cau_hoi']; ?> <br />     
                    <b>Trạng thái: </b><?php
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
                        ?>
                    <br /><b>Trả lời: </b><?php echo $item['cau_tra_loi']; ?> <br /> 
                        <?php if($item['trang_thai'] == 0){ ?>    
                    <tr><a href="staff-answer&id=<?=$item['Id_hoi_dap']?>"><b>Trả lời</b></a></tr>
                    <div style="height: 20px"></div>
                 <?php } ?>
                <?php if($item['trang_thai'] == 1){ ?>    
                    <tr><a href="staff-modify&id=<?=$item['Id_hoi_dap']?>"><b>Chỉnh sửa</b></a></tr>
                    <div style="height: 20px"></div>
                 <?php } ?>           
                </fieldset>
                </tr>
                    <?php }?> 
                
            </table>
        </div>
    </div>
</div>
