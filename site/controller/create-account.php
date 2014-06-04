<?php
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('system/site.php');
//require SYSPATH.('database.php');
//db_connect();
session_start();
load_header();
if(!isset($_SESSION['username'])) load_menubar('index');
else load_menubar('member');
load_menubar('index');
load_leftbar('login');
load_content('create-account');
//load_rightbar();
//load_footer();
?>