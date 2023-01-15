<?php

//connect to database using prodedural method
$conn = mysqli_connect("localhost", "root", "", "simpauth");

//check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}


