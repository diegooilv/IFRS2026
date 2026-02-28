<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Forms PHP</title>
</head>

<body>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome:">
        <input type="submit" value="Enviar">
    </form>

    <?php
    function getForm($nome)
    {
        echo "Formulário Enviado! " . $nome;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
        getForm($_POST['nome']);
    }
    ?>

</body>

</html>