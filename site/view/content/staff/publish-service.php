<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
?>
<div id="content" style="margin-left: 100px">
    <h3 style="text-align: center">Công bố dịch vụ</h3>
    <div style="height: 20px"></div>
    <form method="post" action="index.php?action=staff/publish-service">
        <fieldset>
            <span class="title">Lựa chọn dịch vụ cần công bố</span>
            <div style="height: 20px"></div>
            <select>
                <option value="">Dịch vụ 1</option>
                <option value="">Dịch vụ 2</option>
            </select>
            <div style="height: 20px"></div>
             <div style="text-align: center">
                <input style="width: 120px;height: 40px"
                       type="submit" value="Công bố dịch vụ" name="create">
            </div>
        </fieldset>
    </form>
</div>
