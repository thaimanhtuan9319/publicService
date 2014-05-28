<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!'); ?>
<div id="staff-menubar">
    <ul>
   <li class='has-sub'><a href=''><span>KHAI BÁO DỊCH VỤ CÔNG</span></a>
      <ul>
         <li><a href='index.php?action=staff/create-new-service'><span>Tạo mới lĩnh vực</span></a></li>
         <li><a href='index.php?action=staff/update-faq'><span>Cập nhập FAQ</span></a></li>
         <li class='last'><a href='index.php?action=staff/publish-service'><span>Công bố dịch vụ</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>QUẢN LÝ DỊCH VỤ CÔNG</span></a>
      <ul>
         <li><a href='index.php?action=staff/view-list-service'><span>Xem danh sách các dịch vụ</span></a></li>
         <li><a href='index.php?action=staff/modify-service'><span>Thay đổi thông tin dịch vụ</span></a></li>
         <li class='last'><a href='index.php?action=staff/delete-service'><span>Hủy dịch vụ</span></a></li>
      </ul>
   </li>
   <li><a href='index.php?action=staff/answer'><span>TRẢ LỜI CÔNG DÂN</span></a></li>
   <li><a href='index.php?action=staff/view-feedback'><span>XEM Ý KIẾN PHẢN HỒI</span></a></li>
   <li class='last'><a href='index.php?action=logout'><span>ĐĂNG XUẤT</span></a></li>
</ul>		
</div>