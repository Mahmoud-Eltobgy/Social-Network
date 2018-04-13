<!--This page is just a part of all the pages, except register.php-->
<?php
    include 'php/db_init.php';

    //let's take user info from the database and put them in the $user variable
    //so this information will be available to any page that has the 'header' part
    //we will get this info using the '$_SESSION['email'] variable that we created when the login process succeeded

    $email=$_SESSION['email'];
    $user_info = mysqli_query($db, "SELECT * from users where email='$email'");
    $user = mysqli_fetch_array($user_info);
    //Now, at any page that has the header, we can access these info:
    //$user['first_name'], $user['last_name'], $user['id'], $user['age'], $user['email']... etc (database column names)
?>

<link rel="stylesheet" type="text/css" href="styles/header.css">


<div class="header">
    <h1>Header</h1>
    Welcome <?=$user['first_name']?>
</div>