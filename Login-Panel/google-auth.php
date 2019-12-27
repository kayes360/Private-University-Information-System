<?php
include_once __DIR__.'/GoogleAuthenticator-2.x/src/FixedBitNotation.php';
include_once __DIR__.'/GoogleAuthenticator-2.x/src/GoogleAuthenticatorInterface.php';
include_once __DIR__.'/GoogleAuthenticator-2.x/src/GoogleAuthenticator.php';
include_once __DIR__.'/GoogleAuthenticator-2.x/src/GoogleQrUrl.php';

$siteName 	= 'Login Panel'; // Site Name/Project Name
$userName 	= 'Kayes'; // User Password
$secret 	= 'XVQ2UIGO75XRUKJO'; // User Password
$allowedTime= 30; 
// $code = '846474'; 
$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
echo $g->getCode($secret); //for bypassing the scanning in developemnet stage

if(isset($_POST['submit'])){
	$code=$_POST['auth-code']; 
	echo '<br>';
	var_dump($code);
	
	if ($g->checkCode($secret, $code, $allowedTime)) {
	
	//header('location:/project/landing-page/landing_page.php');
	header('location:/project/Login-Panel/profile/profile.php');
		//header('location:home.php');
		
	} else {
		echo "Not verified \n";
	}
}
$qrcode=\Sonata\GoogleAuthenticator\GoogleQrUrl::generate($userName, $secret, $siteName);


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>2-Step Authentication</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="stylegauth.css" media="all" />
</head>
<body>
	
<div class="container"> 
	<a class="float-right" href="logout.php">Logout</a>	
		<div class="user"> 
			<h1> Two Factor Authentication</h1>
			<center><img src="<?=$qrcode;?>" alt="" /></center>
			<p><h2 color="#fff">Please install Google Authenticator App in your phone.Open it and then scan the bar code above.After scanning enter the code below to complete login process</h2></p>
		<form action="google-auth.php" method="post">
		<div class="form-group">
			<input  type="text" placeholder="Enter Code" name="auth-code"/>
			<input type="submit" value="Submit" name="submit"/>
			</div>
		</form>
		</div>
</div>
</body>
</html>