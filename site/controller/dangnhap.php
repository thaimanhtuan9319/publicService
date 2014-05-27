<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

//Load cac thanh phan trang web
load_header();
load_menubar('index');
load_leftbar('dangnhap');
load_content('dangnhap');
load_rightbar('blank');
//load_footer();

?>
