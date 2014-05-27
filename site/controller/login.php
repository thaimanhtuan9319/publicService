<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

//Load cac thanh phan trang web
load_header();
load_menubar('index');
load_leftbar('login');
load_content('login');
//load_rightbar();
//load_footer();

?>
