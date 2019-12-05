<?php
    // include 'fb-init.php';
    // session_destroy();
    // unset($_SESSION['access_token'] );
    // header('Location:login.php');
?>
 <?php 
    session_start(); 
    session_destroy();
    header('Location: login.php');
    
 ?>