<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/update-faq.php');
?>
<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
        <h3 style="text-align: center">Cập nhật câu hỏi thường gặp</h3>
        <div style="height: 20px"></div>
        <form method="post" action="" accept-charset="utf8">
            <fieldset class="fieldset">
                <span class="title">Nhập câu hỏi</span>
                <div style="height: 20px"></div>
                <textarea name="cauhoi_faq"></textarea>
                <div style="height: 20px"></div>
                <span class="title">Nhập câu trả lời</span>
                <div style="height: 20px"></div>
                <textarea name="cautraloi_faq"></textarea>
                <div style="height: 20px"></div>
                <div style="text-align: center">
                    <input class="style-button" style="width: 120px;height: 40px"
                           type="submit" value="Cập nhật" name="submitted">
                </div>
            </fieldset>
        </form>
    </div>
</div>
