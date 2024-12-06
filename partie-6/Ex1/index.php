<?php

if (
    isset($_GET['firstname'], $_GET['lastname'])
) {
    $firstName = $_GET['firstname'];
    $lastName = $_GET['lastname'];
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
        if (isset($firstName, $lastName)) {
            echo $firstName . " " . $lastName;
        } else {
            echo "Je sais pas qui t'es";
        }
        ?>
    </p>

</body>

</html>