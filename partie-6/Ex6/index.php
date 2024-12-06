<?php

if (
    isset(
        $_GET['building'],
        $_GET['room']
    )
) {
    $building = $_GET['building'];
    $room = $_GET['room'];
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
        if (
            isset(
                $building,
                $room,

            )
        ) {
            echo $building  . " " . $room;
        }
        ?>
    </p>
</body>

</html>