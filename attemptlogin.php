<?php

include 'config.php';

//request data from login form
$username = $_POST['username'];
$password = $_POST['password'];

// attempt login
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

//fetch sql result into an array
$data = mysqli_fetch_array($result);

//check if user exists
if($username == $data['password'])
{
    //start session
    session_start();

    //set session variables
    $_SESSION['username'] = $data['username'];
    $_SESSION['isLoggedin'] = true;

    //redirect to user after succesfully login
    header("Location: dashboard.php");
  
}
else
{
    //redirect to login page if login fails
    header("Location: login.php");
    exit;
}