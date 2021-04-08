<?php 
    require_once "../core/database.php";
    require_once "../core/functions.php";
    require_once "./header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - dashboard</title>
</head>
<body>
    <h1>Welcome admin!</h1>
    <br>
    <?php

    print_r($_SESSION);
    ?>
</body>
</html>