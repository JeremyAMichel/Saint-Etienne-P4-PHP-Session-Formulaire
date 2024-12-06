<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    die();
}

if (
    !isset(
        $_POST['prenom'],
        $_POST['nom'],
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_POST['prenom']) ||
    empty($_POST['nom'])
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$prenom = htmlspecialchars(trim($_POST['prenom']));
$nom = htmlspecialchars(trim($_POST['nom']));


// a remplir en fonction de vos prerequis
if(
    strlen($prenom) > 50 ||
    strlen($nom) > 50
) {
    header('location: ./index.php');
    return;
}



//  Mon code

var_dump($prenom, $nom);