<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');
session_start();
//Load cac thanh phan trang web
load_header();
if(!isset($_SESSION['username'])) load_menubar('index');
else load_menubar('member');
load_leftbar('login');
load_content('login');
load_rightbar('blank');
load_footer();

?>
