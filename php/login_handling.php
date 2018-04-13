<!--This is where we handle user login-->

<?php
    $log_error="";

    if(isset($_POST['log_submit'])){
        $log_email=$_POST['log_email'];
        $log_password=$_POST['log_password'];        
        $users=mysqli_query($db, "SELECT * from users where email='$log_email' AND password='$log_password'");
        $num_users=mysqli_num_rows($users);
        if($num_users==0){
            $log_error="The email or the password are incorrect";
        }
        else {
            $_SESSION['email']=$log_email;
            header("Location: index.php");
        }
    }


    