<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/modify-account-admin.php');
db_connect();
$result = get_list_user_admin();
?>

<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
        <h2 style="font-weight: bold;font-size: 19pt;margin-top: 15px;overflow: hidden;">Chỉnh sửa tài khoản admin</h2>
        <div style="height: 30px"></div>
        <form method="POST" action="" accept-charset='UTF-8'>
            <fieldset class="fieldset">
                <h4 class="create-account-label">Lựa chọn tài khoản admin</h4>
                <select name="username">
        <?php 
            $pulldown = '<option></option>';
            foreach ($result as $item) {
                $pulldown .= "<option value=".$item['Id_user'].">".$item['Username']."</option>\n";
            }
            echo $pulldown;
        ?>
                </select>
                <p class="create-account-label">
                    <label for="password">Nhập mật khẩu cũ</label>
                </p>
                <input class="create-account-input" type="password" name="oldpassword" />
                <span class="input-error" style="color: #dd4b39">* <?php echo $oldpasswordMess;?></span>
                <div style="height: 10px"></div>
                <div style="height: 20px"></div>
                    
                <p class="create-account-label">
                    <label for="password">Nhập mật khẩu mới</label>
                </p>
                <input class="create-account-input" type="password" name="newpassword" />
                <span class="input-error" style="color: #dd4b39">* <?php echo $newpasswordMess;?></span>
                <div style="height: 10px"></div>
                <div style="height: 20px"></div>
                    
                <p class="create-account-label">
                    <label for="password">Nhập lại mật khẩu</label>
                </p>
                <input class="create-account-input" type="password" name="repassword" />
                <span class="input-error" style="color: #dd4b39">* <?php echo $repasswordMess;?></span>
                <div style="height: 10px"></div>
                <div style="height: 20px"></div>
                    
                <input  class="style-button" name="submited" type="submit" value="Cập nhật"/>
            </fieldset>
        </form>
    </div>
</div>