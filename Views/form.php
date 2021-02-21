<?php 
include_once  '../Controller/insert.php';
include_once '../Controller/select.php';

$insert = new insert();

$registerme=$insert->registerMe();

$selectclass= new select();



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

    <div class="container">
    <?php 
        $selectFunction = $selectclass->selectData();

    ?>
    </div>
</body>
</html>