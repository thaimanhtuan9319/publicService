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
        <div id="content" style="margin-left: 150px">
            <h2 id="title">Tra cứu thông tin dịch vụ</h2>
            <fieldset class="fieldset">
                <legend class="main">Hướng dẫn tra cứu</legend>
                -Bước 1: Nhập tên dịch vụ cần tra cứu (Ví dụ: cấp visa)<br />
                -Bước 2: Chọn đơn vị tiếp nhận hồ sơ<br />
                -Bước 3: Nhấn nút 'Tra cứu' để tìm kiếm thông tin về dịch vụ<br />
            </fieldset>
            <form method="post" action="lookup-info-result">
                <fieldset class="fieldset">
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
                            <td style="padding-top: 10px"><input type="submit" name="submited" value="Tra cứu" class="style-button""/></td>
                        </tr>
                    </table>
                    
                </fieldset>
            </form>
        </div>
        <div id="rightbar">
            
        </div>
    </body>
</html>
