 
<?php
	session_start();
    require_once 'google-api-php-client-2.4.0/vendor/autoload.php';

	$gClient = new Google_Client();
	$gClient->setClientId("228772235011-14aaakhj1l26p9it0392fn77leudpk92.apps.googleusercontent.com");
	$gClient->setClientSecret("byTbDd7z6p3nWMffjgPl1q4s");
    $gClient->setApplicationName("Private University Info System"); 
    $gClient->setRedirectUri("http://localhost/project/Login-Panel/login-with-gmail/g-calback.php");
    
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'root','' ,'all_private_university');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>