<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/create-account-member.php');
?>

<div id="content" style="margin-left: 50px">
    <h2 >TẠO TÀI KHOẢN CÔNG DÂN</h2>
    <div style="height: 30px"></div>
    <p style="color: #dd4b39">* Bắt buộc</p>
    <form method="POST" action="" accept-charset='UTF-8'>
        <fieldset>
            <p class="create-account-label">
                <label for="firstname">Họ</label>
            </p>
            <input class="create-account-input" type="text" name="firstname" value="<?php echo $firstname; ?>">
            <span class="input-error" style="color: #dd4b39">* <?php echo $firstNameMess;?></span><br>
            <div style="height: 10px"></div>
            
            <p class="create-account-label">
                <label for="lastname">Tên</label>
            </p>
            <input class="create-account-input" type="text" name="lastname" value="<?php echo $lastname; ?>">
            <span class="input-error" style="color: #dd4b39">* <?php echo $lastNameMess;?></span>
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
            <input class="create-account-input" type="text" name="password" >
            <span class="input-error" style="color: #dd4b39">* <?php echo $passwordMess;?></span>
            <div style="height: 10px"></div>
            
            <div style="height: 10px"></div>
            
            <p class="create-account-label">
                <label for="email">Email</label>
            </p>
            <input class="create-account-input" type="text" name="email" value="<?php echo $email; ?>">
            <span class="input-error" style="color: #dd4b39">* <?php echo $emailMess;?></span>
            <div style="height: 30px"></div>
            
            <input id = "btSignup" type="submit" name="submited" value="Đăng ký">
        </fieldset>
    </form>
</div>
