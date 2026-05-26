<?php
session_start();

// nome do produto, quantidade e o botão “Adicionar”

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!isset($_POST['quantidade']) || !isset($_POST['nome'])) {
        echo "Use corretamente";
        exit;
    }

    if (!empty($_SESSION['produtos'][$_POST['nome']])) {
        echo "Esse produto já existe";
        exit;
    }

    $_SESSION['produtos'][$_POST['nome']] = $_POST['quantidade'];
}
?>

<form method="post">
    <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto">
    <input type="number" name="quantidade" id="quantidade" min="0">
    <input type="submit" value="enviar">
</form>

<a href="./verprodutos.php">Ver Produtos</a>