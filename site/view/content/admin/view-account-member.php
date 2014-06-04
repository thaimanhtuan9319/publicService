<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/view-account-member.php');
db_connect();
$result = get_list_user_member();
?>
    
<div id="content" style="width: 750px">
    <div class="box">
        <div class="heading">DANH SÁCH TÀI KHOẢN CÔNG DÂN</div>
        <div style="height: 30px"></div>
        <table class="table">
            <tr class="table-head">
                <td style="width: 50px">Id</td>
                <td style="width: 100px">Họ</td>
                <td style="width: 100px">Tên</td>
                <td style="width: 100px">Tên tài khoản</td>
                <td style="width: 100px">Email</td>    
            </tr>
            <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                <tr>
                    <td><?php echo $item['Id_user']; ?></td>
                    <td><?php echo $item['Lastname']; ?></td>
                    <td><?php echo $item['Firstname']; ?></td>
                    <td><?php echo $item['Username']; ?></td>
                    <td><?php echo $item['Email']; ?></td>
                </tr>
            <?php }?>      
            </tbody>
        </table>
    </div>
</div>