<?php

//Redirecting to the register page if the value isset($_SESSION['email']) is not set
//We set that value when the login is successful
if(!isset($_SESSION['email'])){
    header("Location: register.php");    
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: register.php");
}
