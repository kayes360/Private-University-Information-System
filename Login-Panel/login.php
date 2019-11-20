<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login/Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="container"> 
		<div class="login-box">
			<div class="row"> 
				<div class="col-md-6 login-left"> 
					<h2> Login </h2>
					<form action="validation.php" method="post">
						<div class="form-group"> 
							<label for="">User Email</label>
							<input type="text" name="email" class="form-control" required />
						</div>
						<div class="form-group"> 
							<label for="">User Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<button type="submit" class="btn btn-primary"> Login</button>
					</form>
				</div>
				<div class="col-md-6 registration-right"> 
					<h2> Register </h2>
					<form action="registration.php" method="post" name="">
						<div class="form-group"> 
							<label for="">User Name</label>
							<input type="text" name="name" class="form-control" required />
						</div>
						<div class="form-group"> 
							<label for="">User Email</label>
							<input type="text" name="email" class="form-control" required />
						</div>
						<div class="form-group"> 
							<label for="">User Phone Number</label>
							<input type="text" name="phonenumber" class="form-control" required />
						</div>
						<div class="form-group"> 
							<label for="">Gender : </label>
							<input type="radio" id="m" name="gender" value="male"/> <label for="m">Male</label>
							<input type="radio" id="f" name="gender" value="female"/> <label for="f" >Female</label>
							<input type="text" id="age" name="age" /> <label for="age" >Age</label>
						</div>
						<div class="form-group"> 
							<label for="">User Address</label>
							<input type="text" name="address" class="form-control" required />
						</div>
						<div class="form-group"> 
							<label for="">User Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<button type="submit" class="btn btn-primary"> Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	</body>

</html>

