<?php
session_start();
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="./login.style.css">
<div id="titulo">
    <h1>Login</h1>
</div>
<form action="./login.php" method="POST">
    <label for="email">Digite seu email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="senha">Digite sua senha:</label>
    <input type="password" name="senha" id="senha" required>
    <br>
    <button type="button" id="toggleSenhaBtn" onclick="toggleSenha()">Ver Senha</button>
    <hr>
    <button type="submit">Entrar</button>
</form>

<footer>
    <a href="https://github.com/diegooilv/IFRS2025/"><img src="./img/github.svg" alt="github svg"></a>
</footer>

<script src="./index.script.js"></script>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!file_exists("dados.json")) {
        echo "Erro no Banco de Dados!!";
        return;
    }

    $dados = json_decode(file_get_contents("dados.json"), true);

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $senha = $_POST["senha"];

    $pessoa = [];
    $logado = false;
    foreach ($dados as $dado) {
        if ($dado["email"] == $email) {
            echo "Usuário Encontrado!!";
            if (password_verify($senha, $dado["senha"])) {
                $pessoa = $dado;
                $logado = true;
            } else {
                echo "Senha Incorreta!!";
                return;
            }
            break;
        }
    }

    if (!$logado) {
        echo "Usuário Não Encontrado!";
        echo "
                <script>
                    setTimeout(() => {
                        window.location.href = './';
                    }, 5000);
                </script>
                ";
        return;
    }

    $_SESSION["user"] = $pessoa;

    echo "Senha Correta! Redirecionando...";
    echo "
        <script>
            setTimeout(() => {
                window.location.href = 'profile.php';
            }, 5000);
        </script>
        ";
}