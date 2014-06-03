<?php

/* 
 * Author: Tuan ThaiManh
 */
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/lookup-info.php');
db_connect();
$result = get_list_donvi();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../../../public/css/lookup-info.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="content">
            <h2 id="title">Tra cứu thông tin hồ sơ</h2>
            <fieldset class="main">
                <legend class="main">Hướng dẫn tra cứu</legend>
                -Bước 1: Nhập tên dịch vụ cần tra cứu (Ví dụ: cấp visa)<br />
                -Bước 2: Chọn đơn vị tiếp nhận hồ sơ<br />
                -Bước 3: Nhấn nút 'Tra cứu' để tìm kiếm thông tin về dịch vụ<br />
            </fieldset>
            <form method="post" action="">
                <fieldset class="main">
                    <legend class="main">Tra cứu</legend>
                    <table>
                        <tr>
                            <td>Tên dịch vụ</td>
                            <td><input type="text" name="tendichvu" value="" style="width: 300px;"/></td>
                        </tr>
                        <tr>
                            <td>Đơn vị tiếp nhận</td>
                            <td><select name="phongban">
                            <?php 
                                 $pulldown = '<option></option>';
                                 foreach ($result as $item) {
                                     $pulldown .= "<option value=".$item['Id_don_vi_quan_ly'].">".$item['ten_don_vi_quan_ly']."</option>\n";
                                 }
                                 echo $pulldown;
                             ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submited" value="Tra cứu" style="font: Segoe;"/></td>
                        </tr>
                    </table>
                    
                </fieldset>
            </form>
        </div>
         <?php 
                        foreach($row as $item){
                    ?>
                <tr>
                    <td><?php echo $item['ten_dich_vu']; ?></td>
                    <td><?php echo $item['mo_ta']; ?></td>
                    <td><?php echo $item['trang_thai_cong_bo']; ?></td>
                </tr>
            <?php }?>
        <div id="rightbar">
            
        </div>
    </body>
</html>
