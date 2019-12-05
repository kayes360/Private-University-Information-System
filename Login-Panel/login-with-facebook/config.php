<?php 
    //session_start();
    require_once "Facebook/autoload.php";
    $FB = new \Facebook\Facebook([
        'app_id' => '2536901843053834',
        'app_secret' => 'dfd5cbe9138e096bd1bb300067068f1f',
        'default_graph_version' => 'v5.0' 
    ]); 
    $helper = $FB->getRedirectLoginHelper();  
?>