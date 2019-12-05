<?php 
 //start the session
 session_start();
 //include autoload file from vender folder
 require 'vendor/autoload.php';

 $fb = new Facebook\Facebook([
     'app_id' => '2461021420679622',
     'app_secret' => 'cc17463b0dd824b34c09664997958e66',
     'default_graph_version' => 'v5.0' 
 ]);
 $helper = $fb->getRedirectLoginHelper();
 $login_url = $helper->getLoginUrl('http://localhost/login-with-facebook/');
 $accessToken = $helper->getAccessToken(); 
 try {
     $accessToken = $helper->getAccessToken();
     echo "<h1>".$accessToken."</h1>";
     if(isset($accessToken)){
         $_SESSION['access_token'] = (string) $accessToken;//convert to string
         //if session is set redirect user to other page
     echo "<h1>". $_SESSION['access_token']."</h1>";
         header("Location:index.php");
     }
 } catch (Exception $exc) {
     $exc=  $exc->getTraceAsString(); 
     echo "<h1>".$exc->getTraceAsString()."</h1>";
 }
// try {
//     // Get the \Facebook\GraphNodes\GraphUser object for the current user.
//     // If you provided a 'default_access_token', the '{access-token}' is optional.
//     $response = $fb->get('/me', '{access-token}');
//   } catch(\Facebook\Exceptions\FacebookResponseException $e) {
//     // When Graph returns an error
//     echo 'Graph returned an error: ' . $e->getMessage();
//     exit;
//   } catch(\Facebook\Exceptions\FacebookSDKException $e) {
//     // When validation fails or other local issues
//     echo 'Facebook SDK returned an error: ' . $e->getMessage();
//     exit;
//   }
  
//   $me = $response->getGraphUser();
//   echo 'Logged in as ' . $me->getName();
  
?> 

 








