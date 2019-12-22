<?php
	session_start();
	/*header('location:login.php');*/
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'all_private_university');
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$s = "SELECT *  FROM registration
		  WHERE Email ='$email'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>
				alert('Email Already Exists!');
				window.location.href='/project/landing-page/landing_page.php ';
				</script>";	
	}
	else{
		$vkey = md5(time().$email);
		$reg = "INSERT INTO registration(Name, Email, Gender,Age, Phone_Number,  Password, vkey,Address)
								 VALUES('$name','$email','$gender',$age,'$phonenumber','$password' ,'$vkey', '$address');";
		mysqli_query($con, $reg);
		// echo "<script>
				// alert('Registration Successfull!');
				// window.location.href='login.php';
				// </script>";		
		//Send Email
		// $to = $email;
		// $subject = "Email Verification";
		// $message = " <a href='http://localhost/project/Login-Panel/verify.php?vkey=$vkey&email=$email'> Register Account</a> ";
		// $headers = "From: cse327s9@gmail.com\r\n";
		// $headers .= "MIME-Version: 1.0\r\n";
		// $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		// //header('location:login.php');
		// mail($to,$subject,$message,$headers);
//PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER PHPMAILER
	include  'sendVerificationMail.php';

		
	}
?> 