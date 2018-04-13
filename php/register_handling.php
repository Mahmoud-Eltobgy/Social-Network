<!--This is where we handle user registration-->

<?php
$reg_error="";
$reg_success="";

if(isset($_POST['reg_submit'])){
    $reg_first_name = $_POST['reg_first_name'];
    $reg_last_name = $_POST['reg_last_name'];
    $reg_first_name = $_POST['reg_first_name'];
    $reg_first_name = $_POST['reg_first_name'];
    $reg_email = $_POST['reg_email'];
    $reg_password = $_POST['reg_password']; 
    $reg_password2 = $_POST['reg_password2'];   
    if($reg_password!=$reg_password2){
        $reg_error="Passwords should be the same!";
    }
    else {
        mysqli_query($db, "INSERT INTO users VALUES ('', '$reg_first_name','$reg_last_name', '$reg_email', '$reg_password', '', '', '', '')");
        $reg_error="";
        $reg_success="Congratulations, you can sign in now";
    }
}