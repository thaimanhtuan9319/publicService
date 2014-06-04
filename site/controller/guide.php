<?php
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('system/site.php');
session_start();
load_header();
if(!isset($_SESSION['username'])) load_menubar('index');
else load_menubar('member');
load_leftbar('blank');
load_content('guide');
load_rightbar('blank');
load_footer();
?>
