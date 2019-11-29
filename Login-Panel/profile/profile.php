
<?php  

 include("connection.php");
 session_start();
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
	
	<!-- Link for Header CSS -->
	<link rel="stylesheet" type="text/css" href="/project/toheader/header.css" media="all" />
	<!-- Link for Footer CSS -->
	<link rel="stylesheet" type="text/css" href="/project/tofooter/tofooter.css" media="all" /> 
</head>
<body>
	
<?php include('../../toheader/toheader.php'); ?>
<div class="container"> 
<div class="cont "> 
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
</div>
<?php include('../../tofooter/tofooter.php'); ?>
<script> 
    var x = document.getElementById('session_text').innerHTML = "<?php echo  $fields['Name'] ; ?> "; 
    document.getElementById("session_text").href="profile.php"; 
</script>
</body>
</html>
<?php }else{ 

} ?> 

