<?php
	session_start();
	 $con = mysqli_connect('localhost','root','');
	 mysqli_select_db($con,'cse 327');
	$mysqli = NEW MySQLi('localhost','root','','cse 327');	
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$s = "SELECT *  FROM registration
		  WHERE Email ='$email' && Password ='$password'";
	
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		$sql = "SELECT verified  FROM registration
			  WHERE Email ='$email' && Password ='$password'";
		$result = $mysqli->query($sql);
		$fields = $result->fetch_assoc();
		
		if($fields['verified']=='Yes'){
		header('location:google-auth.php');
		//header('location:home.php');
		
		}else{
			echo "<script>
				alert('Please verify your email address. A verification link has been sent to $email !');
				window.location.href='login.php';
				</script>";
		}
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		//header('location:home.php');
	}
	else{
		echo "<script>
				alert('Please enter correct User Email and Password!');
				window.location.href='login.php';
				</script>";
		/*header('location:login.php');*/
		
 

	}
?>