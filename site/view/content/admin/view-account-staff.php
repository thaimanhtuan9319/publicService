<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/view-account-staff.php');
db_connect();
$result = get_list_user_staff();
?>
    
<div id="content" style="width: 750px">
    <div class="box">
        <div class="heading">DANH SÁCH TÀI KHOẢN CÁN BỘ</div>
        <div style="height: 30px"></div>
        <table class="table">
            <tr class="table-head">
                <td style="width: 50px">Id</td>
                <td style="width: 100px">Tên cán bộ</td>
                <td style="width: 100px">Tên tài khoản</td>
                <td style="width: 100px">Mật khẩu</td>
                <td style="width: 100px">Số điện thoại</td>
                <td style="width: 100px">Email</td>    
            </tr>
            <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                <tr>
                    <td><?php echo $item['id_can_bo']; ?></td>
                    <td><?php echo $item['ten_can_bo']; ?></td>
                    <td><?php echo $item['username']; ?></td>
                    <td><?php echo $item['password']; ?></td>
                    <td><?php echo $item['dien_thoai']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                </tr>
            <?php }?>      
            </tbody>
        </table>
    </div>
</div>