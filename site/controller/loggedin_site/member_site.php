<?php

/* 
 * Author: Tuan ThaiManh
 */
session_start();
if(isset($_SESSION['username'])) echo $_SESSION['username'];
?>

