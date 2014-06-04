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
load_leftbar('faq');
load_content('faq/sendQues');
load_rightbar('blank');
load_footer();
?>
