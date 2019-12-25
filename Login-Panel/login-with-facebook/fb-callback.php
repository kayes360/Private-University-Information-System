<?php   
    require_once('config.php');
    $accessToken = $helper->getAccessToken();
    
    //$_SESSION['fb_access_token'] = (string) $accessToken;
	//	$access_token = $session->getToken(); 

    if (isset($_GET['state'])) {
        $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    } 
    try {
        $accessToken = $helper->getAccessToken();
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        var_dump($helper->getError());
        echo "Response Exception : ". $e->getMessage();
        exit();
    }catch(Facebook\Exceptions\FacebookSDKException $e){
        echo "SDK Exception : ". $e->getMessage();
        exit();
    }
    
    if(!$accessToken){
        header('Location:/project/landing-page/landing_page.php');
        exit();
    }

    $oAuth2Client = $FB->getOAuth2Client();
    if(!$accessToken->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);   
        
    $response = $FB->get("me?fields=id,name,email,age_range,first_name,last_name,picture.type(large)", $accessToken) ;
    $user_data = $response->getGraphNode()->asArray();
    echo "<pre>";
    $_SESSION['u'] = $user_data;
    var_dump($user_data);

    $_SESSION['userData'] = $user_data;
    $_SESSION['access_token'] = (string) $accessToken;
   // var_dump($_SESSION['access_token'] );
    header('Location: profile.php');
    exit();
?>  