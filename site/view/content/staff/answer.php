<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/staff/answer.php');
$id = $_GET['id'];
?>

<div id="content" style="width: 750px">
    <div style="margin-left: 150px">
        <form method="POST" action="" 
              enctype="multipart/form-data" accept-charset="utf8">
            <fieldset class="fieldset">
                <h3>Nhập câu trả lời</h3>
                <div style="height: 20px"></div>
                <textarea name="answer" >Nhập câu trả lời vào đây</textarea>
                <div style="height: 20px"></div>
                <div style="text-align: center">
                    <input class="style-button" style="width: 120px;height: 40px"
                           type="submit" value="Cập nhật" name="submited">
                </div>
                <input name="id" type="hidden" value="<?php echo $id;?>">
            </fieldset>
        </form>
    </div>
</div>