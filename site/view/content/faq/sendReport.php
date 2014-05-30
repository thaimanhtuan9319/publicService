<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/faq/sendReport.php');
?>
<!DOCTYPE html>
<html>
<body>
<div id="content">
<h2 style="text-align: center; font: Segoe;">Gửi góp ý</h2>
<form method="POST" action="index.php?action=faq/sendReport" accept-charset='UTF-8' id="sendReport">
    <div style="margin-left: 50px;">
    Chọn đơn vị tiếp nhận góp ý
    <select name="select_dvgy">
        <option value="0">--Đơn vị--</option>
        <?php
        require ('system/database.php');

        if(!defined('SYSPATH')) die('Request not found');
        function get_list_dvql() {
            $sql = 'select * from don_vi_quan_ly';
            return db_select_list($sql);
        }
        
        db_connect();
        $result = get_list_dvql();
        
        foreach($result as $item){
        ?>
        <option value="<?php echo $item['Id_don_vi_quan_ly']; ?>"><?php echo $item['ten_don_vi_quan_ly']; ?></option>
        <?php } ?>
    </select> <br />
    
    </div>
    <div style="margin-top: 20px;">
    <div style="margin-left: 50px;">Tiêu đề <input type="text" name="titleReport" /> </div>
    <textarea name="sendReport" id="sendReport" style="width: 500px; margin-left: 50px;" rows="10" >Nhập câu hỏi tại đây</textarea><br />
    <input type="submit" name="submitReport" value="Gửi câu hỏi" style="margin-left: 50px;" />
    </div>
</form>
</div>
</body>
</html>



