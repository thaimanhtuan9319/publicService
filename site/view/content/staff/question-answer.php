<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/question-answer.php');
db_connect();
$result = get_list_question();
?>
<div id="contentall">
    <h3 style="text-align: center">Trả lời công dân</h3>
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
                    Câu hỏi: <?php echo $item['cau_hoi']; ?> <br />     
                    Trạng thái: <?php
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
                    <br />Trả lời: <?php echo $item['cau_tra_loi']; ?> <br /> 
                    <?php if($item['trang_thai'] == 0){ ?>    
                        <td><a href="staff-answer&id=<?=$item['Id_hoi_dap']?>">Trả lời</a></td>
                         <?php } ?>
                        <?php if($item['trang_thai'] == 1){ ?>    
                        <td><a href="staff-modify&id=<?=$item['Id_hoi_dap']?>">Chỉnh sửa</a></td>
                         <?php } ?>           
                        </fieldset>
                        </tr>
                    <?php }?>                  
            </table>
        </div>
           