<?php
	 session_start();
?>
<?php 
	//check login for appication
	// if(isset( $_SESSION['id'])){
		$_SESSION['application_file_path'] ="/project/Login-Panel/payment/payment.php";
	// }else {   
	//  $_SESSION['application_file_path'] = "<script type='text/javascript'>alert('hix');</script>";
	// }
?>
<?php 
include_once("connection.php");
$_SESSION['result']='';
$sql='';
	$_SESSION['location']= isset($_POST['location']) ? $_POST['location'] : '';
	$_SESSION['degree'] = isset($_POST['degree']) ? $_POST['degree'] :'';
	$_SESSION['subject'] =isset( $_POST['subject']) ?$_POST['subject'] :'';
	$_SESSION['campus_type'] = isset($_POST['campus_type'] ) ? $_POST['campus_type'] : '';
	$_SESSION['ieb'] = isset($_POST['ieb'] ) ? $_POST['ieb'] : '';
	$_SESSION['total_cost'] = isset($_POST['total_cost'] ) ? $_POST['total_cost'] : '';
if(!empty($_POST['submit1'])) {
 
	if(!empty($_SESSION['location']) && !empty($_SESSION['degree']) && !empty($_SESSION['subject']) ){
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
				u.Location = '{$_SESSION['location']}'
			AND	c.Degree  = '{$_SESSION['degree']}'
			AND c.subject = '{$_SESSION['subject']}';
		";
	
		$_SESSION['result']= mysqli_query($conn,$sql); 
	}
			
	} 

if(!empty($_POST['submit2'])) { 
			if(
				empty ($_SESSION['location']) &&
				empty ($_SESSION['degree']) &&
				empty ($_SESSION['subject']) &&
				empty ($_SESSION['campus_type']) &&
				empty ($_SESSION['ieb']) &&
				empty($_SESSION['total_cost'])
			) {
				return false;
			}

			$where ="WHERE";
			
			if(!empty ($_SESSION['location']) ){
				$where .=" u.Location = '{$_SESSION['location']}' ";
			}

			if(!empty ($_SESSION['degree']) ){
				$where .= !empty ($_SESSION['location']) ? 'AND' : '';
				$where .=" c.Degree = '{$_SESSION['degree']}' ";

			} 

			if(!empty ($_SESSION['subject']) ){
				$where .= !empty ($_SESSION['location']) || !empty($_SESSION['degree']) ? 'AND' : '';
				$where .=" c.subject = '{$_SESSION['subject']}' ";

			}
			
			if(!empty ($_SESSION['campus_type']) ){
				$where .= !empty ($_SESSION['location']) ||!empty($_SESSION['degree']) ||!empty($_SESSION['subject'])  ? 'AND' : '';
				$where .= " u.Campus_Type = '{$_SESSION['campus_type']}' ";
			}

			if(!empty ($_SESSION['ieb']) ){ 
				$ieb_bool = 'yes' === $_SESSION['ieb'] ? 1 : 0;
				$where .= !empty($_SESSION['location']) || !empty($_SESSION['degree']) || !empty($_SESSION['subject']) || !empty($_SESSION['campus_type'])  ? 'AND' : '';
				$where .= " c.IEB_Accreditation = '{$_SESSION['ieb']}' ";
			}

			if(!empty ($_SESSION['total_cost']) ){  
				$where .= !empty($_SESSION['location']) || !empty($_SESSION['degree']) || !empty($_SESSION['subject']) || !empty($_SESSION['campus_type'])|| !empty ($_SESSION['ieb'])  ? 'AND' : '';
				$where .= " c.Total_Cost <= '{$_SESSION['total_cost']}' ";
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
		 $_SESSION['result'] = mysqli_query($conn,$sql);
		 

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
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
	<link href="https://fonts.googleapis.com/css?family=Uncial+Antiqua" rel="stylesheet">

	<script type="text/javascript" src="jquery-2.2.4.min.js"> </script>

	<link rel="stylesheet" type="text/css" href="/project/bootstrap/bootstrap.css" media="all" /> 
	<!-- Link for Header CSS -->
	<link rel="stylesheet" type="text/css" href="/project/toheader/toheader.css" media="all" />  
	<!-- Link for Footer CSS -->
	<link rel="stylesheet" type="text/css" href="/project/tofooter/tofooter.css" media="all" />
	<!-- Custom CSS For This page -->
	<link rel="stylesheet" type="text/css" href="results_page.min.css" media="all" />
</head>

<body >
	
<?php include('../toheader/toheader.php') ?>  

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
			if ( $_SESSION['result'] ) {

				while($row= mysqli_fetch_object($_SESSION['result'])) { 
					$_SESSION['University_Name'] = $row->University_Name ; 
					$_SESSION['Location'] = $row->Location ; 
					$_SESSION['Degree'] = $row->Degree ; 
					$_SESSION['subject'] = $row->subject ; 
					$_SESSION['Total_Cost'] = $row->Total_Cost ; 
					$_SESSION['semister_time'] = $row->semister_time ; 
					$_SESSION['Total_Time'] = $row->Total_Time ; 
					$_SESSION['Admission_Test'] = $row->Admission_Test ; 
					$_SESSION['Campus_Type'] = $row->Campus_Type ; 
					$_SESSION['IEB_Accreditation'] = $row->IEB_Accreditation ; 
					$_SESSION['Contact_No'] = $row->Contact_No ;  

					if($_SESSION['IEB_Accreditation'] =1){
						$_SESSION['IEB_Accreditation'] ="Yes";
					}else {
						$_SESSION['IEB_Accreditation'] ="No";
					}
					?>
		<div class="container" id="card_section"> 
			<div class="card">

  
  
   <div class="university_name"> 
   
    <h5 class="card-title"> 
	<?php echo $_SESSION['University_Name'] ?> 
	</h5>
   </div>
   <div class="container" id="card_container"> 
   <div class="card-body">
    <!-- <div class="card-text"> -->
		<div class="location"> 		<i class="fas fa-map-marked"></i> 	
									<span> <?php echo $_SESSION['Location'] ?></span>
		</div>
		<div class="degree">   		<i class="fas fa-user-graduate"></i>			
									<span> <?php echo $_SESSION['Degree'] ?></span>
		</div>
		<div class="subject">   	<i class="fas fa-book-open"></i>				
									<span><?php echo $_SESSION['subject'] ?></span>
		</div>
		<div class="totalcost"> 	<i class="fas fa-money-check-alt"></i> 				
									<span> <?php echo $_SESSION['Total_Cost'] ?></span>
		</div>
		<div class="semistertime"> 	<i class="fas fa-calendar-alt"></i> 	
									<span><?php echo $_SESSION['semister_time'] ?></span>
		</div>
		<div class="totaltime"> 	<i class="fas fa-stopwatch"></i>			
									<span> <?php echo $_SESSION['Total_Time'] ?></span>
		</div>
		<div class="admissiontest"> <i class="fas fa-pen-fancy"></i> 				
									<span> <?php echo $_SESSION['Admission_Test'] ?></span>
		</div>
		<div class="campustype"> 	<i class="fas fa-university"></i> 				
									<span> <?php echo $_SESSION['Campus_Type'] ?></span>
		</div>
		<div class="ieb"> 			<i class="fas fa-user-check"></i> 					
									<span> <?php echo $_SESSION['IEB_Accreditation']?></span>
		</div>
		<div class="contact"> 	<i class="fas fa-phone-square" style=" transform: rotate(90deg);"></i><span> <?php echo $_SESSION['Contact_No'] ?></span>				
		</div>
	<?php 
		//check login for appication
		if(isset( $_SESSION['id'])){?>
		<?php 
			'<a href=".$_SESSION[\'application_file_path\']." class=\"btn btn-primary\">Apply </a>';
			echo "<a href=".$_SESSION['application_file_path'].">  Apply </a>";
		}else {   
		?>
		<button id="btnSubmit" class="btn btn-primary"> Apply </button> 
		<br /><br /> 
		<div id="myAlert" class="alert alert-danger collapse">
			<a id="linkClose" href="#" class="close">&times;</a>
			<strong> Please Login To Apply </strong>
		</div>  
		<?php
		}
	?>  
	<!-- </div> -->
	
	
   
  </div>
</div>

</div>
		
		</div>
	
				<?php } // end while ?>
		<?php } // end if ?>	
		</div>


	 
 
	
</body>
<script type="text/javascript">
			$(document).ready(function () { 
				$('#btnSubmit').click(function () {
					$('#myAlert').show('fade');
				}); 
				$('#linkClose').click(function () {
					$('#myAlert').hide('fade');
				});

			});
		</script>
</html>