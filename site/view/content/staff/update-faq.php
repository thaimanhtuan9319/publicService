<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Cập nhật câu hỏi thường gặp</h3>
    <div style="height: 20px"></div>
    <form method="post" action="index.php?action=staff/update-faq">
        <fieldset>
            <span class="title">Nhập câu hỏi</span>
            <div style="height: 20px"></div>
            <textarea name=""></textarea>
            <div style="height: 20px"></div>
            <span class="title">Nhập câu trả lời</span>
            <div style="height: 20px"></div>
            <textarea name=""></textarea>
            <div style="height: 20px"></div>
             <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Cập nhật câu hỏi" name="create">
            </div>
        </fieldset>
    </form>
</div>
