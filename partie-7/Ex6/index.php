<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $civilites = ["Mr", "Mme", "uhfdudf"];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {

        if (
            isset(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['civilite'],
            )
        ) {

            // input sanitization
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $civility = htmlspecialchars(trim($_POST['civilite']));


            if (
                !empty($nom) &&
                !empty($prenom) &&
                !empty($civility)
            ) {


                // a remplir en fonction de vos prerequis
                if (
                    strlen($nom) > 50 ||
                    strlen($prenom) > 50 ||
                    !in_array($civility, $civilites)
                ) {
                    header('location: ./index.php');
                    exit;
                }


                // mon code une fois que toute les données sont bonnes



                echo "<p>nom: {$nom} </p>";
                echo "<p>prenom: {$prenom} </p>";
                echo "<p>civilite: {$civility} </p>";
                exit;
            } else {
                echo "<p style='color: red;'>Veuillez remplir tous les champs.</p>";
            }
        }
    }

    ?>




    <form action="./index.php" method="post">

        <select name="civilite" id="civilite">
            <?php
            foreach ($civilites as $civilite) {
            ?>
                <option value='<?= $civilite ?>' <?php if (isset($civility) && $civility == $civilite) echo 'selected' ?>><?php echo $civilite ?></option>

            <?php
            }
            ?>

        </select>

        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom" value="<?php echo isset($nom) ? $nom : '' ?>">

        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo isset($prenom) ? $prenom : '' ?>">

        <input type="submit" value="Envoyer">
    </form>

</body>

</html>