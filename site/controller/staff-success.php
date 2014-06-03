<?php
/* 
 * Author: Tuan ThaiManh
 */
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');

require ('system/site.php');
// Load cac thanh phan trang web    
load_header();
load_menubar('staff');
load_leftbar('blank');
load_content('staff/success');
load_rightbar('blank');
load_footer();
    
?>