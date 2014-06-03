<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!'); ?>
<div id="staff-menubar">
    <ul>
        <li class='has-sub'><a href=''><span>DANH SÁCH TÀI KHOẢN</span></a>
            <ul>
                <li><a href='admin-view-account-admin'><span>Tài khoản admin</span></a></li>
                <li><a href='admin-view-account-staff'><span>Tài khoản cán bộ</span></a></li>
                <li class='last'><a href='admin-view-account-member'><span>Tài khoản công dân</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>TẠO TÀI KHOẢN</span></a>
            <ul>
                <li><a href='admin-create-account-admin'><span>Tài khoản admin</span></a></li>
                <li><a href='admin-create-account-staff'><span>Tài khoản cán bộ</span></a></li>
                <li class='last'><a href='admin-create-account-member'><span>Tài khoản công dân</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>CHỈNH SỬA TÀI KHOẢN</span></a>
            <ul>
                <li><a href='admin-modify-account-admin'><span>Tài khoản admin</span></a></li>
                <li><a href='admin-modify-account-staff'><span>Tài khoản cán bộ</span></a></li>
                <li class='last'><a href='admin-modify-account-member'><span>Tài khoản công dân</span></a></li>
            </ul>
        </li>
        <li><a href='admin-grant-account-staff'><span>PHÂN QUYỀN CÁN BỘ</span></a></li>
        <li class='has-sub'><a href='#'><span>XÓA TÀI KHOẢN</span></a>
            <ul>
                <li><a href='admin-delete-account-admin'><span>Tài khoản admin</span></a></li>
                <li><a href='admin-delete-account-staff'><span>Tài khoản cán bộ</span></a></li>
                <li class='last'><a href='admin-delete-account-member'><span>Tài khoản công dân</span></a></li>
            </ul>
        </li>
        <li><a href=''><span>ĐĂNG BÀI</span></a></li>
        <li class='last'><a href='logout'><span>ĐĂNG XUẤT</span></a></li>
    </ul>		
</div>