<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/view-account-staff.php');
db_connect();
$result = get_list_user_staff();
?>
    
<div id="content" style="width: 800px">
    <div style="margin-left: 150px">
        <h2 style="font-weight: bold;font-size: 19pt;margin-top: 15px;overflow: hidden;">Danh sách tài khoản cán bộ</h2>
        <div style="height: 30px"></div>
        <table id="tfhover" class="tftable" border="1">
            <tr>
                <th style="width: 50px">Id</th>
                <th style="width: 100px">Tên cán bộ</th>
                <th style="width: 100px">Tên tài khoản</th>
                <th style="width: 100px">Số điện thoại</th>
                <th style="width: 100px">Email</th>
                <th style="width: 200px;">Đơn vị quản lý</th>
            </tr>
            <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                <tr>
                    <td><?php echo $item['id_can_bo']; ?></td>
                    <td><?php echo $item['ten_can_bo']; ?></td>
                    <td><?php echo $item['username']; ?></td>
                    <td><?php echo $item['dien_thoai']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <?php $sql = "select * from don_vi_quan_ly where Id_don_vi_quan_ly = '".$item['Id_don_vi_quan_ly']."'";
                            $query = mysql_query($sql);
                            $row = mysql_fetch_array($query);
                            ?>
                    <td><?php echo $row['ten_don_vi_quan_ly']; ?></td>
                </tr>
            <?php }?>      
            </tbody>
        </table>
    </div>
</div>