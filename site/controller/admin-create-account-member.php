<?php
/* 
 * Author: Tuan ThaiManh
 */

session_start();

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

load_header();
load_menubar('logged-in');
load_leftbar('blank');
load_content('admin/create-account-member');
load_rightbar('blank');
load_footer();
?>