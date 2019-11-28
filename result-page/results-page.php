<?php

include_once("connection.php");
$result='';
$sql='';
	$location = isset($_POST['location']) ? $_POST['location'] : '';
	$degree = isset($_POST['degree']) ? $_POST['degree'] :'';
	$subject =isset( $_POST['subject']) ?$_POST['subject'] :'';
	$campus_type = isset($_POST['campus_type'] ) ? $_POST['campus_type'] : '';
	$ieb = isset($_POST['ieb'] ) ? $_POST['ieb'] : '';
	$total_cost = isset($_POST['total_cost'] ) ? $_POST['total_cost'] : '';
	
	
if(!empty($_POST['submit1'])) {
	// $location = isset($_POST['location']) ? $_POST['location'] : '';
	// $degree = isset($_POST['degree']) ? $_POST['degree'] :'';
	// $subject =isset( $_POST['subject']) ?$_POST['subject'] :'';
	// $campus_type = isset($_POST['campus_type'] ) ? $_POST['campus_type'] : '';
	// $ieb = isset($_POST['ieb'] ) ? $_POST['ieb'] : '';
	// $total_cost = isset($_POST['total_cost'] ) ? $_POST['total_cost'] : '';

	// switch($_POST['submit']){
		// case 'submit_1':

			if(!empty($location) && !empty($degree) && !empty($subject) ){
				$sql = "
					SELECT 
						u.University_Initial,
						u.University_Name,
						u.Location,
						c.Degree,
						c.subject,
						c.Total_Cost,
						c.semister_time,
						c.Total_Time,
						u.Campus_Type,
						c.Admission_Test,
						c.IEB_Accreditation,
						u.Contact_No
					FROM universities as u 
						LEFT JOIN courses as c 
							ON (c.University_Initial = u.University_Initial)
					WHERE 
						u.Location = '$location'
					AND	c.Degree  = '$degree'
					AND c.subject = '$subject';
				";
			
				$result= mysqli_query($conn,$sql);
			}
			
	}
			// break;

if(!empty($_POST['submit2'])) {
		// case 'submit_2':
			if(
				empty ($location) &&
				empty ($degree) &&
				empty ($subject) &&
				empty ($campus_type) &&
				empty ($ieb) &&
				empty($total_cost)
			) {
				return false;
			}

			$where ="WHERE";
			
			if(!empty ($location) ){
				$where .=" u.Location = '$location' ";
			}

			if(!empty ($degree) ){
				$where .= !empty ($location) ? 'AND' : '';
				$where .=" c.Degree = '$degree' ";

			} 

			if(!empty ($subject) ){
				$where .= !empty ($location) || !empty($degree) ? 'AND' : '';
				$where .=" c.subject = '$subject' ";

			}
			
			if(!empty ($campus_type) ){
				$where .= !empty ($location) ||!empty($degree) ||!empty($subject)  ? 'AND' : '';
				$where .= " u.Campus_Type = '$campus_type' ";
			}

			if(!empty ($ieb) ){ 
				$ieb_bool = 'yes' === $ieb ? 1 : 0;
				$where .= !empty($location) || !empty($degree) || !empty($subject) || !empty($campus_type)  ? 'AND' : '';
				$where .= " c.IEB_Accreditation = $ieb_bool ";
			}

			if(!empty ($total_cost) ){ 
				$where .= !empty($location) || !empty($degree) || !empty($subject) || !empty($campus_type) || !empty ($ieb)  ? 'AND' : '';
				$where .= " c.Total_Cost <= $total_cost ";
			}
			
			$sql = "
				SELECT 
					u.University_Initial,
					u.University_Name,
					u.Location,
					c.Degree,
					c.subject,
					c.Total_Cost,
					c.semister_time,
					c.Total_Time,
					u.Campus_Type,
					c.Admission_Test,
					c.IEB_Accreditation,
					u.Contact_No
				FROM universities as u 
					LEFT JOIN courses as c 
						ON (c.University_Initial = u.University_Initial)
				$where;
			";
		
			$result= mysqli_query($conn,$sql);
			
			// break;	
	// }

}

// echo '<pre>';
// print_r($sql);
// print_r($result);
// echo '</pre>';

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Private Universitiy Finder</title>
	
	
	<link rel="shortcut icon" type="image/png" href="../media\favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.2.0-web/all.min.css" media="all" />
	<script src="https://kit.fontawesome.com/3662edb615.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" type="text/css" href="bootstrap_results_page.min.css" media="all" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
	<link href="https://fonts.googleapis.com/css?family=Uncial+Antiqua" rel="stylesheet">
	<script type="text/javascript" src="jquery-2.2.4.min.js"> </script>
</head>

<body >
	<header> 
		<div class="logo_Name">
			<a href="#">
			<img src="../media/logo_img2.png" alt="" id="logo_img"/>
		
			</a>
		</div>
		<div class="nav_bar">
			<ul>
				<li><a href="../landing-page/landing_page.php" title="Home">Home</a></li>
				<li><a href="#social-media" title="Social Media"> Social Media</a></li>
				<li><a href="../contact-us-page/contact-us.php"title="Contact Us">Contact Us</a></li>
				<li><a href="../about/about.php"title="Why Us ?">Why Us ?</a></li>
			</ul>
		</div>
	</header>

		<div class="coitainer" id="left_form_container"> 
			
        <div class="left_form"> 
		<fieldset id="form_fieldset"> 
		<form class="sideform"  method="POST" action="">
            <label for="city">City</label> <br>
            <select id="city"  name="location" value="" > 
			
				<option value=""  selected>Select Your City</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Mymensingh">Mymensingh</option>
            </select><br>
            <label for="degree">Degree</label> <br>
            <select id="degree" name="degree" value="" > 
			
				<option value=""  selected>Select Your Degree</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Masters">Masters</option>
            </select> <br>
            
            <label for="subject">Subject</label> <br>
            <select id="subject" name="subject" value="" > 
				<option value=""  selected>Select Your Subject</option>
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
				
            </select><br>
			
			<label for="campus_type">Campus Type</label> <br>
            <select id="campus_type" name="campus_type" value="" > 
				<option value=""  selected>Select Your Choice</option>
                <option value="Permanet">Permanet</option>
                <option value="Rented">Rented</option>                
				
            </select><br>
			
            <label for="ieb">IEB Accreditation</label> <br>
            <select id="ieb" name="ieb" value="" > 
				<option value="" selected >IEB Accreditation</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
				
            </select>
			
			<p>Tution Fee(max): 
			<br /><span id="max_fee"> </span></p>  
			<input type="range" name='total_cost'  id="fee_range" value="500000" min="0" max="1000000" step="50000"  onchange="showMaxFee(this.value);">
			<br />
		<input type="submit" name="submit2"  id="form_submit"  value="Search" >
	
	
		<script> 
				var slider = document.getElementById("fee_range");
				var output = document.getElementById("max_fee");
					output.innerHTML = slider.value;
				slider.oninput = function(){
					output.innerHTML = this.value;
				}

		</script>
			
        </form> 
		</fieldset>
		</div>
		</div>
		
		
	

			<?php 
			if ( $result ) {

				while($row = mysqli_fetch_object($result)) { ?>
		<div class="container" id="card_section"> 
			<div class="card">

  
  
   <div class="university_name"> 
   <!-- <img class="card-img-top" src="nsu logo.png" alt="Card image cap" style="height:80px; -->
																							  <!-- width:80px;  -->
																							  <!-- align:center; -->
																							  <!-- display: block; -->
																								<!-- margin-left: auto; -->
																								<!-- margin-right: auto; -->
																		  <!-- " > -->
    <h5 class="card-title"> 
	<?php echo $row->University_Name ?> (<?php echo $row->University_Initial ?>)
	</h5>
   </div>
   <div class="container" id="card_container"> 
   <div class="card-body">
    <!-- <div class="card-text"> -->
		<div class="location"> 		<i class="fas fa-map-marked"></i> 	
									<span> <?php echo $row->Location ?></span>
		</div>
		<div class="degree">   		<i class="fas fa-user-graduate"></i>			
									<span> <?php echo $row->Degree ?></span>
		</div>
		<div class="subject">   	<i class="fas fa-book-open"></i>				
									<span><?php echo $row->subject ?></span>
		</div>
		<div class="totalcost"> 	<i class="fas fa-money-check-alt"></i> 				
									<span> <?php echo $row->Total_Cost ?></span>
		</div>
		<div class="semistertime"> 	<i class="fas fa-calendar-alt"></i> 	
									<span><?php echo $row->semister_time ?></span>
		</div>
		<div class="totaltime"> 	<i class="fas fa-stopwatch"></i>			
									<span> <?php echo $row->Total_Time ?></span>
		</div>
		<div class="admissiontest"> <i class="fas fa-pen-fancy"></i> 				
									<span> <?php echo $row->Admission_Test ?></span>
		</div>
		<div class="campustype"> 	<i class="fas fa-university"></i> 				
									<span> <?php echo $row->Campus_Type ?></span>
		</div>
		<div class="ieb"> 			<i class="fas fa-user-check"></i> 					
									<span> <?php echo $row->IEB_Accreditation ?></span>
		</div>
		<div class="contact"> 		<i class="fas fa-phone-square" style=" transform: rotate(90deg);"></i>		 					  <span> <?php echo $row->Contact_No ?></span>				
		</div>
	


	<!-- </div> -->
	
	
   
  </div>
</div>

</div>
		
		</div>
	
				<?php } // end while ?>
		<?php } // end if ?>	
		</div>


	
	
	
	
	
	
	
	
	
	
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