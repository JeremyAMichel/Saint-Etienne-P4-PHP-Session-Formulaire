<?php

if (
    isset(
        $_GET['week']
    )
) {
    $week = $_GET['week'];
    
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
                    $week,
         
                )
            ) {
                echo $week;
            }
        ?>
    </p>
</body>

</html>