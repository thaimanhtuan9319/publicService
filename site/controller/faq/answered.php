<?php

/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

load_header();
load_menubar('index');
load_leftbar('faq');
load_content('faq/answered');
load_rightbar('blank');
load_footer();
?>
