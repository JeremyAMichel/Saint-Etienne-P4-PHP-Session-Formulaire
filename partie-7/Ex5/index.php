<?php

$civilites = ["Mr", "Mme", "uhfdudf"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (
        !isset(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['civilite'],
        )
    ) {
        header('location: ./index.php');
        return;
    }

    if (
        empty($_POST['nom']) ||
        empty($_POST['prenom']) ||
        empty($_POST['civilite']) 
    ) {
        header('location: ./index.php');
        return;
    }

    // input sanitization
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $civilite = htmlspecialchars(trim($_POST['civilite']));


    // a remplir en fonction de vos prerequis
    if (
        strlen($nom) > 50 ||
        strlen($prenom) > 50 ||
        !in_array($civilite, $civilites)
    ) {
        header('location: ./index.php');
        return;
    }


    // mon code une fois que toute les données sont bonnes
    var_dump($nom, $prenom, $civilite);

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
    <form action="./index.php" method="post">

        <select name="civilite" id="civilite">
            <?php
                foreach($civilites as $civilite){
                    echo "<option value='{$civilite}'>{$civilite}</option>";
                }
            ?>
        </select>

        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom">

        <input type="submit" value="Envoyer">
    </form>

</body>

</html>