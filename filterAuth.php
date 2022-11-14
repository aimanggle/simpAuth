<?php

//check every request for a valid session if not redirect to login page
if(!isset($_SESSION['isLoggedin'])){
    header("Location: login.php");
    exit;
}