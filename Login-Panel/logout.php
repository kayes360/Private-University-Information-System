<?php
	session_start();
	session_destroy();
	header('location:/project/landing-page/landing_page.php');
?>