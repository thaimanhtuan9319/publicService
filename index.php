<?php

/* 
 * Author: Tuan ThaiManh
 */

define('SYSPATH', 'system/');
require SYSPATH.('client.php');

$action = inputGet('action');

if(!$action){
    $action = 'trangchu';
}
if(file_exists('site/controller/'.$action.'.php'))
{
   require ('site/controller/'.$action.'.php'); 
}
else {
    require ('site/controller/show_404.php');
}


