<?php

//connect to database using prodedural method
$conn = mysqli_connect("localhost", "root", "", "simpAuth");

//check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


