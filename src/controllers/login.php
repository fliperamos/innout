<?php
loadModel("Login");

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        echo "Usuario {$user->name} Logado :)";
    } catch (Exception $e) {
        echo "Fala no login :(";
    }
}

loadView("Login", $_POST);