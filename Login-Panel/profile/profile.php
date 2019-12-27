<?php
	session_start();
	// $con = mysqli_connect('localhost','root',''); 
	//$mysqli = NEW MySQLi('localhost','root','','all_private_university');	
	include('../../connection/connection.php')	;
	
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
<?php  

 include("connection.php");
 //session_start();
 $id =   $_SESSION['id'];  
 if(isset( $_SESSION['id'])){
        $sql= "SELECT *
               FROM registration 
               WHERE ID = '$id' ;   
                ";
        $result = $mysqli->query($sql);
        $fields = $result->fetch_assoc();
		$_SESSION['ID'] =  $fields['ID'];
		$_SESSION['Name'] =  $fields['Name'];
		$_SESSION['Email'] =  $fields['Email'];
		$_SESSION['Gender'] =  $fields['Gender'];
		$_SESSION['Age'] =  $fields['Age'];
		$_SESSION['Phone_Number'] =  $fields['Phone_Number'];
		$_SESSION['Address'] =  $fields['Address'];
		$_SESSION['verified'] =  $fields['verified'];
      ?>
      <!DOCTYPE HTML>
<html lang="en-US">
<title> Welcome Page</title>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="/project/bootstrap/bootstrap.css" media="all" />
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/3662edb615.js" crossorigin="anonymous"></script> 
	<link rel="shortcut icon" type="image/png" href="../../media\favicon.png"/>
	
	<!-- Link for Header CSS -->
	<link rel="stylesheet" type="text/css" href="/project/toheader/toheader.css" media="all" />
	<!-- Link for Footer CSS -->
	<link rel="stylesheet" type="text/css" href="/project/tofooter/tofooter.css" media="all" /> 
	<link rel="stylesheet" href="profile.css">
</head>
<body>
	
<?php include('../../toheader/toheader.php'); ?>
<div class="container-flow">  
	<div class="main-body "> 	
		<h1>My Unique ID = <?php echo  $_SESSION['ID'] ; ?> </h1>  
		<h1>Name = <?php echo  $_SESSION['Name'] ; ?> </h1> 
		<h1>Email = <?php echo  $_SESSION['Email'] ; ?> </h1> 
		<h1>Gender = <?php echo  $_SESSION['Gender'] ; ?> </h1> 
		<h1>Age = <?php echo  $_SESSION['Age'] ; ?> </h1> 
		<h1>Phone = <?php echo  $_SESSION['Phone_Number'] ; ?> </h1> 
		<h1>Address = <?php echo  $_SESSION['Address'] ; ?> </h1> 
		<h1>Profile Verriefied = <?php echo  $_SESSION['verified'] ; ?> </h1>  
	</div>  
</div>
<?php include('../../tofooter/tofooter.php'); ?>
<script> 
    // var x = document.getElementById('session_text').innerHTML = "<?php echo  $fields['Name'] ; ?> "; 
    // document.getElementById("session_text").href="profile.php"; 
</script>
</body>
</html>
<?php }else{ 

} ?> 

