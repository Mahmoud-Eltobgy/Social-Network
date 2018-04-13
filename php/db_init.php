<?php
    $db = mysqli_connect("localhost", "root", "", "network" );
    if(mysqli_connect_errno()){
        echo "Can't connect to the database";
    }


/*
Database description:
name: network
tables(until now): 1-users

USERS TABLE:
    id : INT, auto intcremented
    first_name : VARCHAR, 30
    last_name : VARCHAR, 30
    email : VARCHAR, 200
    password : VARCHAR, 200
    age : INT
    num_posts : INT, default NULL
    num_likes : INT, default NULL
    friends_array : TEXT
*/