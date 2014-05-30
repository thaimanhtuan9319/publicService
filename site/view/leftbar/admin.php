<?php  
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
?>
    
<div id="leftbar">
    <div id="leftmenu">
        <ul>
            <li class='has-sub'><a href='#'><span>Danh sách tài khoản</span></a>
                <ul>
                    <li><a href='index.php?action=admin/view-account-admin'><span>Tài khoản admin</span></a></li>
                    <li><a href='index.php?action=admin/view-account-staff'><span>Tài khoản cán bộ</span></a></li>
                    <li class='last'><a href='index.php?action=admin/view-account-member'><span>Tài khoản công dân</span></a></li>
                </ul>
            </li>
            <li class='has-sub'><a href='#'><span>Tạo tài khoản</span></a>
                <ul>
                    <li><a href='index.php?action=admin/create-account-admin'><span>Tài khoản admin</span></a></li>
                    <li><a href='index.php?action=admin/create-account-staff'><span>Tài khoản cán bộ</span></a></li>
                    <li class='last'><a href='index.php?action=admin/create-account-member'><span>Tài khoản công dân</span></a></li>
                </ul>
            </li>
            <li class='has-sub'><a href='#'><span>Chỉnh sửa tài khoản</span></a>
                <ul>
                    <li><a href='index.php?action=admin/modify-account-admin'><span>Tài khoản admin</span></a></li>
                    <li><a href='index.php?action=admin/modify-account-staff'><span>Tài khoản cán bộ</span></a></li>
                    <li class='last'><a href='index.php?action=admin/modify-account-member'><span>Tài khoản công dân</span></a></li>
                </ul>
            </li>
            <li><a href='index.php?action=admin/grant-account-staff'><span>Phân quyền cán bộ</span></a>
            </li>
            <li class='has-sub last'><a href='#'><span>Xóa tài khoản</span></a>
                <ul>
                    <li><a href='index.php?action=admin/delete-account-admin'><span>Tài khoản admin</span></a></li>
                    <li><a href='index.php?action=admin/delete-account-staff'><span>Tài khoản cán bộ</span></a></li>
                    <li class='last'><a href='index.php?action=admin/delete-account-member'><span>Tài khoản công dân</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>