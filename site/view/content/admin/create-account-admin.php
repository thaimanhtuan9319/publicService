<?php if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/create-account-admin.php');
?>

<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
        <h2 style="font-weight: bold;font-size: 19pt;margin-top: 15px;overflow: hidden;">Tạo tài khoản admin</h2>
        <div style="height: 30px"></div>
        <p style="color: #dd4b39">* Bắt buộc</p>
        <form method="POST" action="" accept-charset='UTF-8'>
            <fieldset style="text-align: center;" class="fieldset">
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                
                <p class="create-account-label">
                    <label for="firstname">Họ</label>
                </p>
                <input class="create-account-input" type="text" name="firstname" value="<?php echo $firstname; ?>"/>
                <span class="input-error" style="color: #dd4b39">* <?php echo $firstNameMess;?></span><br/>
                <div style="height: 10px"></div>
                
                <p class="create-account-label">
                    <label for="lastname">Tên</label>
                </p>
                <input class="create-account-input" type="text" name="lastname" value="<?php echo $lastname; ?>"/>
                <span class="input-error" style="color: #dd4b39">* <?php echo $lastNameMess;?></span>
                <div style="height: 10px"></div>
                
                <p class="create-account-label">
                    <label for="username">Tên tài khoản</label>
                </p>
                <input class="create-account-input" type="text" name="username" value="<?php echo $username; ?>"/>
                <span class="input-error" style="color: #dd4b39">* <?php echo $usernameMess;?></span>
                <div style="height: 10px"></div>
                
                <p class="create-account-label">
                    <label for="password">Mật khẩu</label>
                </p>
                <input class="create-account-input" type="password" name="password" />
                <span class="input-error" style="color: #dd4b39">* <?php echo $passwordMess;?></span>
                <div style="height: 10px"></div>
                
                <p class="create-account-label">
                    <label for="password">Nhập lại mật khẩu</label>
                </p>
                <input class="create-account-input" type="password" name="repassword" />
                <span class="input-error" style="color: #dd4b39">* <?php echo $repasswordMess;?></span>
                <div style="height: 10px"></div>
                
                <p class="create-account-label">
                    <label for="email">Email</label>
                </p>
                <input class="create-account-input" type="text" name="email" value="<?php echo $email; ?>"/>
                <span class="input-error" style="color: #dd4b39">* <?php echo $emailMess;?></span>
                <div style="height: 30px"></div>
                
                <input class="style-button" type="submit" name="submit" value="Xác nhận"/>
            </fieldset>
        </form>
    </div>
</div>
