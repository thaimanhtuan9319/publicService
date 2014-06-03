<?php
/* 
 * Author: Tuan ThaiManh
 */

session_start();
//if(isset($_SESSION['username'])) echo $_SESSION['username'];

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

load_header();
load_menubar('logged-in');
load_leftbar('blank');
load_content('blank');
load_rightbar('blank');
load_footer();
?>