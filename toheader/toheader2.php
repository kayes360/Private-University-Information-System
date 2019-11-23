<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
			<!-- Font Awesome need -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<!-- Bootstrap core CSS  need-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap need -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
		<!-- CustomCSS -->
		<link rel="stylesheet" href="toheader2.css" />
		<!-- JQuery need-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Bootstrap core JavaScript need-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Bootstrap tooltips no need-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- MDB core JavaScript no need -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>


</head>
<style type="text/css"> 
	@media only screen and (max-width: 1000px) {
	.login-profile .dropdown-menu{
	 left: 0%;
	 }
	}
</style>


<body>  
	<header>
		<div class="head-container">
			<nav class="mb-1 navbar navbar-expand-lg navbar-dark  ">
				<div class="logo-area"> 
					 <a class="navbar-brand" href="#">
						<img src="logo_img2.png" alt="" id="logo_img"/> 
					 </a>
				</div>
				   <!--THIS BUTTON WILL ACTIVATE IN SMALL DEVICE -->
			   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
				aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			   </button> 
				  
				  <!-- menu -->
				  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
					<div  class="nav_bar"> 
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item"><a class="nav-link" href="../landing-page/landing_page.php" title="Home">Home </a></li>
						  <li class="nav-item"><a class="nav-link" href="#social-media" title="Social Media"> Social Media</a></li>
						  <li class="nav-item"><a class="nav-link" href="../contact-us-page/contact-us.php" title="Contact Us">Contact Us</a></li>
						  <li class="nav-item"><a class="nav-link" href="../about/about.php" title="Why Us ?">Why Us ?</a></li> 
						</ul>
					</div>
					
					<!-- login -->
					<div class="login-profile">
						<ul class="navbar-nav ml-auto nav-flex-icons">
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
							  aria-haspopup="true" aria-expanded="false">
							  <i class="fas fa-user"></i>
							  Name
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-default"
							  aria-labelledby="navbarDropdownMenuLink-333">
							  <a class="dropdown-item" href="#">Profile</a> 
							  <div class="dropdown-divider" style="margin: 0 0;"></div>
							  <a class="dropdown-item" href="#">Logout</a>
							</div>
						  </li>
						</ul>
					</div>
				  </div>
			</nav>
		</div>
			<!--/.Navbar -->
	</header>
</body>
</html>