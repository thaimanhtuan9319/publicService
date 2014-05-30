<?php if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!'); ?>
<div id="menubar">
    <ul>
   <li><a href='index.php?action=home'><span>TRANG CHỦ</span></a></li>
   <li><a href='index.php?action=guide'><span>HƯỚNG DẪN</span></a></li>
   <li><a href='index.php?action=lookup-info'><span>TRA CỨU THÔNG TIN</span></a></li>
   <li><a href='index.php?action=doc-form'><span>MẪU HỒ SƠ</span></a></li>
   <li><a href='index.php?action=faq'><span>HỎI ĐÁP</span></a></li>
   <li class='last'><a href='index.php?action=login'><span>ĐĂNG NHẬP</span></a></li>
   <li style="float: right;">
    <table style="border-collapse: collapse; border-color: #00aaaa; float: right;" >
        <tr>
            <td>
                 <input type="text" name="search" value="" style="margin-left: 10px; margin-top: 10px; height: 20px;" />
            </td>
            <td>
                 <input type="submit" name="search" value="Tìm kiếm" style="margin-top: 10px; font-size: 14px;"/>
            </td>
        </tr>
        
    </table>
   </li>
</ul>			
</div>
