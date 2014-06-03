<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/update-document.php');
db_connect();
$result = get_list_dichvu();  
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Khai báo dịch vụ công</h3>
    <div style="height: 20px"></div>
    <form method="POST" action="" 
          enctype="multipart/form-data" accept-charset="utf8">
        <fieldset>
            <span class="title">Lựa chọn dịch vụ cần cập nhật tài liệu</span>
            <div style="height: 20px"></div>
            <select name="Id_dichvu">
                <?php 
                    $pulldown = '<option></option>';
                    foreach ($result as $item) {
                        $pulldown .= "<option value=".$item['Id_dich_vu'].">".$item['ten_dich_vu']."</option>\n";
                    }
                    echo $pulldown;
               ?>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Tài liệu liên quan</span>
            <div style="height: 20px"></div>
            <input type="file" name="file_upload">
            <p><?php if(isset($mess)) echo $mess?></p>
            <div style="height: 20px"></div>
            <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Cập nhật tài liệu" name="submitted">
            </div>
        </fieldset>
    </form>
</div>