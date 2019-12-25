<?php 
 require_once('config.php'); 
 
if(isset($_SESSION['access_token'])){
    header('Location: ../profile/profile.php');
    exit();
} 

 $redirect_url = "https://localhost/project/Login-Panel/login-with-facebook/fb-calback.php"  ;
 $permissions = ['email'];
 $login_url = $helper->getLoginUrl($redirect_url,$permissions);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="btn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
</head>
<style>
    i:"after{
        border-left: 6px solid green;
        height: 500px;
    }
</style>
    <body>
        <div class="container">
            <a href=" <?php echo $login_url; ?>" class="button-3d">
                <i class="fa fa-facebook-f"> </i>
                <span class=""> Sign in with Facebook </span>
            </a>
        </div> 
  </body>
 
</html>




 