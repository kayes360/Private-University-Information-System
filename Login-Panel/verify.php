<?php
		$mysqli = NEW MySQLi('localhost','root','','all_private_university');	
		$vkey =isset($_GET['vkey']) ? ($_GET['vkey']) : false; 
		$email =isset($_GET['email']) ? ($_GET['email']) : false;
		
		if (empty($vkey)){
			echo "Error vkey";
			return;
		}
		if (empty($email)){
			echo "Error email";
			return;
		}
	    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 
		} else {
		  echo("$email is not a valid email address");
		}
		//var_dump($vkey  );
		//var_dump($email  );
		
		$sql= "SELECT 
					vkey,
					verified
				FROM 
					registration 
				WHERE 
					Email= '$email' 
				";
		$result = $mysqli->query($sql);
		$fields = $result->fetch_assoc();
		//var_dump($fields['vkey']);
		
		if(empty($fields['vkey'])){
			echo "Email Not found";
			return;
		}
		if($fields['vkey'] === 'Yes'){
			echo "Email Already Verified";
		}
		
		if ( $vkey !== $fields['vkey']){
			echo "Email not verified";
			
			return;
		}
		// if ( $vkey === $fields['vkey'] ){
			// echo "Email  verified";
			// return;
		// }	
		$set="UPDATE `registration` SET verified='Yes'
			  WHERE Email ='$email'
			  AND    vkey ='$vkey' ";	
		mysqli_query($mysqli, $set);
		if($set){
				echo "<script>
				alert('Your Email address has been verified.You may login. Thank You');
				window.location.href='login.php';
				</script>";
			}else{
				echo 'error';
			}
?>