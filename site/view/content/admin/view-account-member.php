<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/view-account-member.php');
db_connect();
$result = get_list_user_member();
?>
    
<div id="content" style="width: 800px">
    <div style="margin-left: 150px">
        <h2 style="font-weight: bold;font-size: 19pt;margin-top: 15px;overflow: hidden;">Danh sách tài khoản công dân</h2>
        <div style="height: 30px"></div>
        <table id="tfhover" class="tftable" border="1">
            <tr>
                <th style="width: 50px">Id</th>
                <th style="width: 100px">Họ</th>
                <th style="width: 100px">Tên</th>
                <th style="width: 100px">Tên tài khoản</th>
                <th style="width: 100px">Email</th>    
            </tr>
            <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                <tr>
                    <td><?php echo $item['Id_user']; ?></td>
                    <td><?php echo $item['Firstname']; ?></td>
                    <td><?php echo $item['Lastname']; ?></td>
                    <td><?php echo $item['Username']; ?></td>
                    <td><?php echo $item['Email']; ?></td>
                </tr>
            <?php }?>      
            </tbody>
        </table>
    </div>
</div>