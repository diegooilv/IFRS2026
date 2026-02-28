<?php
require_once __DIR__ . "/database/models/User.php";

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $verify = $user->create($_POST["name"], $_POST["email"], $_POST["password"]);
    if ($verify) {
        echo "Usuário criado com sucesso!";
    } else {
        echo "Erro ao criar usuário.";
    }
}