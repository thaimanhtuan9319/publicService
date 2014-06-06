<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/grant-account-staff.php');
db_connect();
$result = get_list_user_staff();
$result2 = get_list_donvi();
?>

<div id="content"  style="width: 750px">
    <div>
        <div id="notification"></div>
        <div style="margin-left: 150px">
            <h2 style="font-weight: bold;font-size: 19pt;margin-top: 15px;overflow: hidden;">Phân quyền tài khoản cán bộ</h2>
            <div style="height: 30px"></div>
            <form method="POST" action="" accept-charset='UTF-8'>
                <fieldset class="fieldset">
                    <h3 class="create-account-label">Lựa chọn tài khoản cán bộ</h3>
                    <label>
                        <select name="username">
                            <?php 
                                $pulldown = '<option></option>';
                                foreach ($result as $item) {
                                    $pulldown .= "<option value=".$item['username'].">".$item['username']."</option>\n";
                                }
                                echo $pulldown;
                            ?>
                        </select>
                    </label>
                    <br>
                    <h3 class="create-account-label">Lựa chọn đơn vị trực thuộc </h3>
                    <label>
                        <select name="phongban">
                            <?php 
                                $pulldown = '<option></option>';
                                foreach ($result2 as $item2) {
                                    $pulldown .= "<option value=".$item2['Id_don_vi_quan_ly'].">".$item2['ten_don_vi_quan_ly']."</option>\n";
                                }
                                echo $pulldown;
                            ?>
                        </select>
                    </label>
                    <div style="height: 30px"></div>
                    <input class="style-button" type="submit" name="submited" value="Cấp quyền">
                </fieldset>
            </form>
        </div>
    </div>
</div>