<?php
	session_start();
	// $con = mysqli_connect('localhost','root',''); 
	//$mysqli = NEW MySQLi('localhost','root','','all_private_university');	
	include('../connection/connection.php')	;
	
	if(!isset($_SESSION['email'])){
		header('location:login.php');
	}

	$email = $_SESSION['email'];
	//$id = $_SESSION['ID']  ;
	$sql= "SELECT Name
		   FROM registration 
		   WHERE Email= '$email' 
				";
		$result = $mysqli->query($sql);
		$fields = $result->fetch_assoc();
	$sql_id =  "SELECT ID
				FROM registration 
				WHERE Email= '$email' 
					";
		$result_id = $mysqli->query($sql_id);
		$fields_id = $result_id->fetch_assoc();
		$_SESSION['id'] = $fields_id['ID'] ;
		 
					
?>
<!DOCTYPE HTML>
<html lang="en-US">
<title> Welcome Page</title>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="home.css" media="all" />
</head>
<body>
	
<div class="container"> 
<div class="cont "> 
	<div class="main-body ">
		<a class="float-right" href="Logout.php">Logout</a>		
		<h1>Welcome <?php echo  $fields['Name'] ; ?> </h1>
		<h1>Welcome <?php echo  $fields_id['ID'] ; ?> </h1>
	</div>
	 <button type="button" class="btn btn-secondary"> 
		<a href="/project/Login-Panel/profile/profile.php ">Profile</a>
	 </button>
		<a href="/project/Login-Panel/profile/profile.php ">Profile</a>

</div>
</div>

</body>
</html>
