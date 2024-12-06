<?php

if (
    isset(
        $_GET['age']
    )
) {
    $age = $_GET['age'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>


        <?php
        if (isset($_GET['age'])){
            echo $age;
        } else {
            echo 'L\'age n\'est pas renseigné';
        }
        ?>

    </p>

</body>

</html>