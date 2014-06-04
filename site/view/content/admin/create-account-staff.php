<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require SYSPATH.('database.php');
require ('site/model/admin/create-account-staff.php');
db_connect();
$result = get_list_donvi();
?>

<div id="content" style="margin-left: 50px">
    <h2 >TẠO TÀI KHOẢN CÁN BỘ</h2>
    <div style="height: 30px"></div>
    <p style="color: #dd4b39">* Bắt buộc</p>
    <form method="POST" action="" accept-charset='UTF-8'>
        <fieldset>
            <p class="create-account-label">
                <label for="name">Tên cán bộ</label>
            </p>
            <input class="create-account-input" type="text" name="name" value="<?php echo $name; ?>">
            <span class="input-error" style="color: #dd4b39">* <?php echo $nameMess;?></span>
            <div style="height: 10px"></div>
            
            <p class="create-account-label">
                <label for="username">Tên tài khoản</label>
            </p>
            <input class="create-account-input" type="text" name="username" value="<?php echo $username; ?>">
            <span class="input-error" style="color: #dd4b39">* <?php echo $usernameMess;?></span>
            <div style="height: 10px"></div>
            
            <p class="create-account-label">
                <label for="password">Mật khẩu</label>
            </p>
            <input class="create-account-input" type="password" name="password" >
            <span class="input-error" style="color: #dd4b39">* <?php echo $passwordMess;?></span>
            <div style="height: 10px"></div>
            
            <p class="create-account-label">
                <label for="phone">Nhập lại mật khẩu</label>
            </p>
            <input class="create-account-input" type="password" name="repassword" >
            <span class="input-error" style="color: #dd4b39">* <?php echo $repasswordMess;?></span>
            <div style="height: 10px"></div>
            
            <p class="create-account-label">
                <label for="quanly">Phòng ban</label>
            </p>
            <select name="phongban">
               <?php 
                    $pulldown = '<option></option>';
                    foreach ($result as $item) {
                        $pulldown .= "<option value=".$item['Id_don_vi_quan_ly'].">".$item['ten_don_vi_quan_ly']."</option>\n";
                    }
                    echo $pulldown;
                ?>
            </select>
            <div style="height: 30px"></div>
            
            <input id = "btSignup" type="submit" name="submited" value="Đăng ký">
        </fieldset>
    </form>
</div>
