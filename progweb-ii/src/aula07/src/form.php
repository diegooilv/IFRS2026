<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["nome"] ?? "";
    $data = $_POST["data_nascimento"] ?? "";
    $email = $_POST["correio_eletronico"] ?? "";
    $curso = $_POST["curso"] ?? "";
    $turno = $_POST["turno"] ?? "";
    $areas = $_POST["areas_interesse"] ?? [];

    $errors = [];
    if (empty($name)) {
        $errors[] = "O campo nome é obrigatório.";
    }
    if (empty($data)) {
        $errors[] = "O campo data de nascimento é obrigatório.";
    }
    if (empty($email)) {
        $errors[] = "O campo correio eletrônico é obrigatório.";
    }
    if (empty($curso)) {
        $errors[] = "O campo curso é obrigatório.";
    }
    if (empty($turno)) {
        $errors[] = "O campo turno é obrigatório.";
    }
    if (empty($areas)) {
        $errors[] = "O campo áreas de interesse é obrigatório.";
    }

    echo "<h2>Dados Recebidos:</h2>";
    if (!empty($errors)) {
        echo "<h3>Erros:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "Nome: " . htmlspecialchars($name) . "<br>";
        echo "Data de Nascimento: " . htmlspecialchars($data) . "<br>";
        echo "Correio Eletrônico: " . htmlspecialchars($email) . "<br>";
        echo "Curso: " . htmlspecialchars($curso) . "<br>";
        echo "Turno: " . htmlspecialchars($turno) . "<br>";
        echo "Áreas de Interesse: " . implode(", ", array_map('htmlspecialchars', $areas)) . "<br>";
    }

} else {
    header("Location: ./index.html");
    exit();
}