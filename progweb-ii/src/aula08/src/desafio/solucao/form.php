<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $idade = $_POST["idade"] ?? "";
    $senha = $_POST["senha"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $interesses = $_POST["interesses"] ?? "";

    $erros = [];
    if (empty($nome)) {
        $erros[] = "Falta o nome!";
    }
    if (empty($email)) {
        $erros[] = "Falta o email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email Inválido!";
    }
    if (empty($idade)) {
        $erros[] = "Falta a idade!";
    } else if ($idade < 18 ){
        $erros[] = "Idade Incorreta!";
    }
    if (empty($senha)) {
        $erros[] = "Falta a senha!";
        if(strlen($senha) < 6){
            $erros[] = "Senha Inválida!";
        }
    }
    if (empty($genero)) {
        $erros[] = "Falta o gênero!";
    }
    if (empty($interesses)) {
        $erros[] = "Falta os interesses!";
    }

    if (count($erros) > 0) {
        foreach ($erros as $erro) {
            echo ("<p class=\"erro\">" . $erro . "</p>");
        }
        return;
    }

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $user = [
        "nome" => $nome,
        "email" => $email,
        "idade" => $idade,
        "senha" => $senha,
        "genero" => $genero,
        "interesses" => $interesses
    ];

    if (!file_exists("dados.json")) {
        file_put_contents("dados.json", "[]");
    }
    $dados = json_decode(file_get_contents("dados.json"), true);
    if($dados === null){
        echo "Erro no Servidor!!";
        return;
    }
    $dados[] = $user;
    file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT), LOCK_EX);
     echo "
                <script>
                    window.location.href = 'login.php';
                </script>
                ";
}else {
    echo "Erro";
}