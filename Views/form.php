<?php 
include_once  '../Controller/insert.php';

$insert = new insert();

$registerme=$insert->registerMe();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form method="POST">
        <input type="text" name="username"  placeholder="Username">
        <input type="password" name="password"  placeholder="Password">
        <input type="text" name="unit"  placeholder="Unit">
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>