<!--This is the main (home) page-->
<?php
    session_start();     
    include 'php/db_init.php';
    include 'php/index_handling.php';
?>

<html lang="en">
    <head>
        <title>Social Network</title>
    </head>
    <body>
        <?php
            include 'partials/header.php';
        ?>

        <form action="index.php" method="POST">
            <input type="submit" value="Log out" name="logout">            
        </form>
    </body>
</html>