<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/faq/sendQues.php');
db_connect();
$result = get_list_dvql();
?>
<!DOCTYPE html>
<html>
    <body>
        <div id="content">
            <h2 style="text-align: center; font: Segoe;">Đặt câu hỏi</h2>
            <form method="POST" action="" accept-charset='UTF-8' id="sendQuesPost">
                <div style="margin-left: 50px;">
                    Chọn đơn vị giải đáp
                    <select name="select_dvgd">
                        <option value="0">--Chọn đơn vị giải đáp câu hỏi--</option>
        <?php
            foreach($result as $item){
        ?>
                        <option value="<?php echo $item['Id_don_vi_quan_ly']; ?>"><?php echo $item['ten_don_vi_quan_ly']; ?></option>
        <?php } ?>
                    </select> <br />
                    
                </div>
                <div style="margin-top: 20px;">
                    <div style="margin-left: 50px;">Tiêu đề <input type="text" name="titleQues" /> </div>
                    <textarea name="sendQues" id="sendQues" style="width: 500px; margin-left: 50px;" rows="10" >Nhập câu hỏi tại đây</textarea><br />
                    <input type="submit" name="submitQues" value="Gửi câu hỏi" style="margin-left: 50px;" />
                </div>
            </form>
        </div>
    </body>
</html>



