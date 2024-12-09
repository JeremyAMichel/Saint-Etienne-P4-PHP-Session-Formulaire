<?php


session_start();

$_SESSION['user']['lastname'] = "michel";
$_SESSION['user']['firstname'] = "Jeremy";
$_SESSION['user']['age'] = "29";


$_SESSION['cart'] = '';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./page2.php">go to page 2</a>
</body>
</html>