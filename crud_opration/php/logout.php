<?php
include('connection.php'); 
    if(isset($_SESSION["id"])){ session_start(); }
    // $_SESSION = array();
    session_unset(); 
    session_destroy(); 
    $redirectUrl = '../html/login.php';
    echo '<script type="application/javascript">alert("You Logout Succssfully!"); window.location.href = "'.$redirectUrl.'";</script>';

   
    //header("location:../html/login.html");
     // Or wherever you want to redirect
    exit();
?>