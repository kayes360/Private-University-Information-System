 
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!-- <link rel="stylesheet" type="text/css" href="bootstrap_landing_page.min.css" media="all" /> -->
		<!--FOR Header -->
	<link rel="stylesheet" type="text/css" href="/project/toheader/toheader.css" media="all" />  
		<!--FOR Header -->
  <!--FOR modal -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://kit.fontawesome.com/3662edb615.js" crossorigin="anonymous"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="/project/toheader/modal-style.css" media="all" />
   <!--FOR modal -->
	</head>
		
	<body>
	<header>
		<div class="head-container">
			<div class="logo-area">
				<div class="logo_Name">
					<a href="#" id="asdlogo_img">
					<img src="/project/media/logo_img2.png" alt="" id="logo_img"/>

					</a>
				</div>
			</div>
			<div class="nav_bar">
				<ul>
					<li><a href="/project/landing-page/landing_page.php" title="Home">Home</a></li> 
					<li><a href="#social-media" title="Social Media"> Social Media</a></li>
					<li><a href="/project/contact-us-page/contact-us.php"title="Contact Us">Contact Us</a></li>
					<li><a href="/project/about/about.php"title="Why Us ?">Why Us ?</a></li>
				</ul>
			</div>
			<div class="profile">
				<div class="profile-content">
					<?php  
						include("connection.php");
						//session_start();
						//$id = $_SESSION['id'];  
						if(isset( $_SESSION['id'])){
						$id =$_SESSION['id'];
								$sql= "SELECT Name
										FROM registration 
										WHERE ID = '$id' ;   
										";
								$result = $mysqli->query($sql);
								$fields = $result->fetch_assoc();
							echo	"<div class=\"dropdown\"> ";
							echo		"<a class=\"login-dropdown btn btn-primary\" data-toggle=\"dropdown\">";
							echo			"<i class=\"fas fa-user\"></i> ".$fields['Name'];
							echo		"</a>";
							echo		"<div class=\"dropdown-menu\">";
							echo		"	<a class=\"dropdown-item\" href=\" /project/Login-Panel/profile/profile.php \">My Account</a>";
							echo			"<a class=\"dropdown-item\" href=\" /project/Login-Panel/logout.php \">Logout</a>";
							echo		"</div>";
							echo 	"</div>";
						}else{
							echo "<a  class=\"before-login\"  href=\"#theModal\" id=\'session_text\'  data-remote=\"/project/Login-Panel/login-sign-up-modal.php\" data-toggle=\"modal\" data-target=\"#theModal\">Login/Sign Up</a>";
							echo	"<div class=\"modal fade\" id=\"theModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\"> ";
							echo		"<div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">" ;
							echo		"<div class=\"modal-content\">";
							echo				"<div class=\"modal-body\">" ;
							echo				"</div>";
							echo		"</div>";
							echo	"</div>";
							echo	"</div>"; 
						}
					?>
					

					<!-- after login -->
						
					<!-- after login -->
				</div>
			</div>
		</div>
		</header>

		
	</body>
	<script type="text/javascript" src="/project/toheader/modal-script.js"> </script>
	</html>
	 