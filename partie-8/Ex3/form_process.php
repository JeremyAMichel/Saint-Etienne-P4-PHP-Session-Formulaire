<?php

// var_dump($_POST);

setcookie('login', $_POST['login']);
setcookie('password', $_POST['password']);

header('Location: ../Ex4/resultat-cookie.php');
exit;