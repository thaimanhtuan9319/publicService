<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
function load_header(){
    require ('site/view/header.php');
}

function load_leftbar($leftbar){
    require ('site/view/leftbar/'.$leftbar.'.php');
}

function load_menubar($menubar){
    require ('site/view/menubar/'.$menubar.'.php');
}

function load_rightbar($rightbar){
    require ('site/view/rightbar/'.$rightbar.'.php');
}

function load_footer(){
    require ('site/view/footer.php');
}

function load_content($content){
    require ('site/view/content/'.$content.'.php');
}

?>