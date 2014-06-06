<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');
session_start();
load_header();
if(!isset($_SESSION['username'])) load_menubar('index');
else load_menubar('member');
load_leftbar('index');
load_content('tintuc/Tong_ket_cong_tac_giao_duc_quoc_phong');
load_rightbar('index');
load_footer();
?>
