<?php
	require_once "config.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
    header('Location: /project/landing-page/landing_page.php');
	exit();
?>