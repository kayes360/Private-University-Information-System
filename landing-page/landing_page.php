

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Private Universitiy Finder</title>
	 <link rel="stylesheet" type="text/css" href="/project/bootstrap/bootstrap.min.css" media="all" />  
	 <link rel="stylesheet" type="text/css" href="/project/bootstrap/bootstrap.css" media="all" /> 
    

	<link rel="shortcut icon" type="image/png" href="../media\favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.2.0-web/css/all.min.css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="bdIcon.css" media="all" /> 

	<script src="https://kit.fontawesome.com/6dc803f8de.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery/jquery-2.2.4.min.js"> </script>
	<script type="text/javascript" src="jquery/jquery.waypoints.min.js"> </script>
	<script type="text/javascript" src="jquery/jquery.waypoints.min.js"> </script>
	<script type="text/javascript" src="jquery/jquery.counterup.min.js"> </script>


	<link rel="stylesheet" type="text/css" href="landing_page.css" media="all" />  
    <!-- Link for Header CSS -->
	<link rel="stylesheet" type="text/css" href="/project/toheader/toheader.css" media="all" />  
	<!-- Link for Footer CSS -->
	<link rel="stylesheet" type="text/css" href="/project/tofooter/tofooter.css" media="all" /> 

</head>
<body>
	
<?php include('../toheader/toheader.php') ?>
	<div class="full-body"> 
	<section class="sec_1">
		<div class="main_bg">
			<form method="POST" action="">

				<div class="row">
					<div class="form-group col-md-3">
					<select class="form-control" id="location" name="location" >
			<option value="" disabled selected >Select Location  <i class="fas fa-coffee fa-xs"></i></option>
						<option value="Dhaka">Dhaka</option>
						<option value="Chittagong">Chittagong </option>
						<option value="Sylhet">Sylhet </option>
						<option value="Khulna">Khulna </option>
						<option value="Barisal">Barisal </option>
						<option value="Rongpur">Rongpur </option>
						<option value="Narayanganj">Narayanganj </option>
					</select>
				  </div>

			  <div class="form-group col-md-3">
				<select class="form-control " id="degree" name="degree" >
					<option value="" disabled selected>Select Your Degree</option>
					<option value="Bachelor">Bachelor</option>
					<option value="Masters">Masters</option>
				</select>
			  </div>

			  <div class="form-group col-md-3">
				<select class="form-control" id="subject"  name="subject" >
					<option value="" disabled selected>Select Your Subject</option>
					<option value="Architecture">Architecture</option>
					<option value="BBA">BBA</option>
					<option value="Civil Engineering">Civil Engineering</option>
					<option value="CSE">CSE</option>
					<option value="Economics">Economics</option>
					<option value="English">English</option>
					<option value="EEE">EEE</option>
					<option value="LLB">LLB</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Microbiology">Microbiology</option>
					<option value="Pharmacy">Pharmacy</option>
					<option value="Physics">Physics</option>
					<option value="Textile">Textile</option>
				</select>
			  </div>
				<div class="form-group col-md-3">
				<input type="submit" name="submit1" value="Submit"/> </div>
				</div>


			</form>
		</div>
	</section>

	<section class="sec_2" id="stats">
		<div class="content-box">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4">
						<div class="stat-items">
							<i class="fas fa-university"></i>
								<h2 id="uni">
							<span class="counter text-center">
									50
									</span>
									<span> +</span>
								</h2>
								<p> Universities</p>
						</div>
					</div>
					<div class="col-md-4" id="subjects">
						<div class="stat-items">
							 <!-- <i class="icon-books-stack-of-three-s-5050"></i>  -->
							 <i class="fa fa-book" id="subjects"></i>
								<h2 id="subjects1">
									<span class="counter text-center" id ="subjects">
									100
									</span>
									<span id ="subjects"> +</span>
								</h2>
								<p id ="subjects"> Subjects</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="stat-items">
						<span class="icon-bangladesh"></span> 
						<!-- <i class="fas fa-globe-asia"></i> -->
								<h2 id="bd">
								  	<span class=" text-center" style="font-size:35px">
									 All Over <br />Bangladesh
									</span>
									<span>  </span>
								</h2>
								<p> </p>
						</div>
					</div>

					</div>
				</div>
			</div>
<!--		</div>-->
	</section>
	 
	<?php include('../tofooter/tofooter.php')?>

	<!-- <p class="backtotop">  -->
		<!-- <a id="back-to-top" class="hide" onclick="topFunction()" id="myBtn" title="Go to top"> -->

		<!-- <i class="fas fa-angle-double-up" id="back-to-top"></i> -->

	<!-- </a> -->

	<!-- </p> -->
		<div class="back-to-top hide" href="#">
	<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</div>
	</div>
	<!-- on scroll counter script  -->

	<script>
		jQuery(document).ready(function(){
		 $(".counter").counterUp({
		   delay: 10,
		   time: 1000
		});
		});


	</script>

	<script>
// When the user clicks on the button, scroll to the top of the document

$(document).on('click','.back-to-top',function(){
	$('html,body').animate({scrollTop:0},500);
	return false;

 });

// Hide scroll button on top
	$(document).scroll(function(e){
		var scrollPos = $(this).scrollTop();
		if(scrollPos < 100){
			$('.back-to-top').addClass('hide');
		}else{

		$('.back-to-top').removeClass('hide');
		}
	});

</script>
</body>
</html>
