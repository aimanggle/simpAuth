# SimpAuth

## Introduction
This is a simple Authentication for php. It comes with Login Form, Register Form, Filter and Logout.

## How to use ?
Just Copy the files in your project and include the files in your project.

## How to use the filterAuth ?
Include "include/filter.php" in your top of the file to page required login.

Example:
```php
<?php
require 'include/filter.php';
?>
```

## How to modify page after succesful login ?
Just modify the file "attemptlogin.php" and change the line 28 to your page.

```php
//redirect to user after succesfully login
header("Location: dashboard.php");
```


