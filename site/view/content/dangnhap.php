<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/dangnhap.php');
session_start();

?>

<div id="content">
    <h2 style="text-align: center">ĐĂNG NHẬP HỆ THỐNG</h2>
    <div style="height: 30px"></div>
    <div id="login-form">
        <form action="index.php?action=dangnhap" method="post">
            <div>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <b>Tên tài khoản:</b> <input class="form-input" type="text" name="username">
                <div style="height: 20px"></div>
                <b>Mật khẩu:</b><input class="form-input" type="password" name="password">
            </div>
            <div style="height: 40px"></div>
            <div>
                <input id = "btLogin" type="submit" name='btLogin' value="Đăng nhập">
            </div>
            <div style="height: 40px"></div>
            <div id="login-error">
                <?php 
                    if(isset($message))
                        echo $message;?>
            </div>
        </form>
    </div>
</div>
