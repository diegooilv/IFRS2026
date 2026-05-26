<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['senha'])) {

        if ($_POST['email'] == "admin" && $_POST['senha'] == "1234") {
            $_SESSION['nome'] = "Admin";
            header('Location: ./dashboard.php');
            exit;
        } else {
            echo "Usa certo (Usuário ou senha incorretos)";
        }
    }
}
?>

<form method="POST">
    <input type="text" name="email" id="email" placeholder="Seu usuário">
    <input type="password" name="senha" id="senha" placeholder="Sua senha">
    <button type="submit">Enviar</button>
</form>