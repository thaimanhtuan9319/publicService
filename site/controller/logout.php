<?php

/* 
 * Author: Tuan ThaiManh
 */

session_destroy();
header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/home");
?>