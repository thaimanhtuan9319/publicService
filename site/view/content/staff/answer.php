<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Trả lời công dân</h3>
    <div style="height: 20px"></div>
    <form method="post" action="index.php?action=staff/answer">
        <fieldset>
            <span class="title">Lựa chọn câu hỏi</span>
            <div style="height: 20px"></div>
            <select>
                <option value="">Câu hỏi 1</option>
                <option value="">Câu hỏi 2</option>
            </select>
            <div style="height: 20px"></div>
            <span class="title">Nhập câu trả lời</span>
            <div style="height: 20px"></div>
            <textarea name=""></textarea>
            <div style="height: 20px"></div>
             <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Đăng câu trả lời" name="publish">
            </div>
        </fieldset>
    </form>
</div>