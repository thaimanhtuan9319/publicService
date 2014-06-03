<?php
/* 
 * Author: Tuan ThaiManh
 */

session_start();

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

load_header();
load_menubar('staff');
load_leftbar('blank');
load_content('staff/update-faq');
load_rightbar('blank');
load_footer();
?>