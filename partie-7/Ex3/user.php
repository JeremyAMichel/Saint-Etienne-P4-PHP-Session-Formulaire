<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ./index.php');
    die();
}

if (
    !isset(
        $_GET['prenom'],
        $_GET['nom'],
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_GET['prenom']) ||
    empty($_GET['nom'])
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$prenom = htmlspecialchars(trim($_GET['prenom']));
$nom = htmlspecialchars(trim($_GET['nom']));


// a remplir en fonction de vos prerequis
if(
    strlen($prenom) > 50 ||
    strlen($nom) > 50
) {
    header('location: ./index.php');
    return;
}



//  Mon code

echo $prenom . ' ' .  $nom;