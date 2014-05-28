<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/admin/view-account.php');
db_connect();
$result = get_list_user();
?>
    
<div id="content" style="width: 750px">
    <div class="box">
        <div class="heading">DANH SÁCH TÀI KHOẢN</div>
        <div style="height: 30px"></div>
            <table class="table">
                <tr class="table-head">
                        <td style="width: 50px">Id</td>
                        <td style="width: 100px">Họ</td>
                        <td style="width: 100px">Tên</td>
                        <td style="width: 100px">Tên tài khoản</td>
                        <td style="width: 100px">Mật khẩu</td>
                        <td style="width: 100px">Loại tài khoản</td>
                        <td style="width: 100px">Email</td>    
                    </tr>
                <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                    <tr>
                    <td><?php echo $item['idUsers']; ?></td>
                    <td><?php echo $item['Lastname']; ?></td>
                    <td><?php echo $item['Firstname']; ?></td>
                    <td><?php echo $item['Username']; ?></td>
                    <td><?php echo $item['Password']; ?></td>
                    <td><?php 
                            $usertype = '';
                            switch ($item['User_type']) {
                                case 1:
                                    $usertype = 'Admin';
                                    break;
                                case 2:
                                    $usertype = 'Cán bộ';
                                    break;
                                case 3:
                                    $usertype = 'Thành viên';
                                    break;
                                default:
                                    break;
                            };
                            echo $usertype; ?></td>
                    <td><?php echo $item['Email']; ?></td>
                
                
              	<td>
              	
              </td>
            </tr>
            <?php }?>      
                </tbody>
            </table>
    </div>
</div>