<?php 
include_once("connection.php");
if(isset($_POST['submit'])) {	
	$location 	= $_POST['location'];
	$Degree 	= $_POST['degree'];
	$Subject 	= $_POST['subject'];
	$sql 		= " SELECT 
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
						LEFT JOIN  courses as c
							ON (c.University_Initial = u.University_Initial)
					WHERE 
						u.Location LIKE '%$location%'
							AND c.Degree LIKE '%$Degree%'
							AND c.subject LIKE '%$Subject%'";
	
		}else{

		$sql = "SELECT * FROM `universities`"	;
		}
			
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.2.0-web/css/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="bootstrap_results_page.min.css" media="all" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
	
</head>
<style>



	</style>
<body style="background:grey;">

		<div class="coiner" id="left_form_container"> 
			
        <div class="left_form"> 
		<fieldset id="form_fieldset"> 
		<form class="sideform">
            <label for="degree">Degree</label> <br>
            <select id="degree" name=degree> 
			
				<option value="" disabled selected>Select Your Degree</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Masters">Masters</option>
            </select> <br>
            <label for="city">City</label> <br>
            <select id="city"  name=city> 
			
				<option value="" disabled selected>Select Your City</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Mymensingh">Mymensingh</option>
            </select><br>
            <label for="campus_type">Campus Type</label> <br>
            <select id="campus_type" name=campus_type> 
				<option value="" disabled selected>Select Your Choice</option>
                <option value="Permanet">Permanet</option>
                <option value="Rented">Rented</option>                
				
            </select><br>
            <label for="subject">Subject</label> <br>
            <select id="subject" name=subject> 
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
				
            </select><br>
            <label for="ieb">IEB Accreditation</label> <br>
            <select id="ieb" name=ieb> 
				<option value="" disabled >IEB Accreditation</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
				
				 
				
            </select>
			
			
			
			<p>Tution Fee(max): 
			<br /><span id="max_fee"> </span></p>  
			<input type="range"  id="fee_range" value="50%" min="0" max="1000000" step="50000">
			<br />
			<input type="submit"  id="form_submit" value="Search" >
		
	
	
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


			<?php while($row = mysqli_fetch_object($result)) {?>
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
	
	
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
		
		</div>
	
			<?php } ?>			


</body>
</html>