<?php
/* 
 * Author: Tuan ThaiManh
 */
$id = $_GET['id'];
session_start();

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

load_header();
load_menubar('staff');
load_leftbar('blank');
load_content('staff/modify');
load_rightbar('blank');
load_footer();
?>