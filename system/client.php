<?php
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function inputGet($key){
    return isset($_GET[$key])? $_GET[$key] : FALSE;
}

function inputPost($key){
    return isset($_POST[$key]) ? $_POST[$key] : FALSE;
}
?>
