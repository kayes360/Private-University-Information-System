
<?php  

 include("../../connection/connection.php");
 session_start();
 $id =   $_SESSION['id'];  
 if(isset( $_SESSION['id'])){
        $sql= "SELECT *
               FROM registration 
               WHERE ID = '$id' ;   
                ";
        $result = $mysqli->query($sql);
        $fields = $result->fetch_assoc();
      ?>
      <!DOCTYPE HTML>
<html lang="en-US">
<title> Welcome Page</title>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="/project/bootstrap/bootstrap.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="../../toheader/header.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../../bootstrap/bootstrap.css" media="all" />
</head>
<body>
	
<?php include('../../toheader/toheader.php'); ?>
<div class="container"> 
<div class="cont "> 
	<div class="main-body ">
		<a class="float-right" href="../Logout.php">Logout</a>		
		<h1>Mah Unique ID <?php echo  $fields['ID'] ; ?> </h1> 
		<h1>Name <?php echo  $fields['Name'] ; ?> </h1> 
		<h1>Email <?php echo  $fields['Email'] ; ?> </h1> 
		<h1>Gender <?php echo  $fields['Gender'] ; ?> </h1> 
		<h1>Age <?php echo  $fields['Age'] ; ?> </h1> 
		<h1>Phone  <?php echo  $fields['Phone_Number'] ; ?> </h1> 
		<h1>Address <?php echo  $fields['Address'] ; ?> </h1> 
		<h1>Verification <?php echo  $fields['verified'] ; ?> </h1> 
		
	</div> 

</div>
</div>
<script> 
    var x = document.getElementById('session_text').innerHTML = "<?php echo  $fields['Name'] ; ?> "; 
    document.getElementById("session_text").href="profile.php"; 
</script>
</body>
</html>
<?php }else{ 

} ?> 

