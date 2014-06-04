<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/home");
		exit();
	}
	else {
		$_SESSION = array();
		session_destroy();
		setcookie('PHPSESSID', '', time()-300, '/', '', 0);
	}
	header("Location: http://".$_SERVER['HTTP_HOST'].
           "/publicService/appManager/home");

?>
