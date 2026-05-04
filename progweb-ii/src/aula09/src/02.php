<form method="POST">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome" id="nome">
    <hr>

    <label for="nota1">Digite sua primeira nota:</label>
    <input type="number" name="nota1" id="nota1" step="0.1">
    <br>
    <label for="nota2">Digite sua segunda nota:</label>
    <input type="number" name="nota2" id="nota2" step="0.1">
    <br>
    <label for="nota3">Digite sua terceira nota:</label>
    <input type="number" name="nota3" id="nota3" step="0.1">
    <hr>
    <button type="submit">Enviar</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nota1 = $_POST['nota1'] ?? null;
    $nota2 = $_POST['nota2'] ?? null;
    $nota3 = $_POST['nota3'] ?? null;

    $nome = $_POST['nome'] ?? null;

    if (!$nome) {
        echo "<script>window.alert(\"Insira seu nome!\");</script>";
        exit();
    }

    if (!$nota1 or !$nota2 or !$nota3) {
        echo "<script>window.alert(\"Insira todas as notas!\");</script>";
        exit();
    }

    if (($nota1 > 10 or $nota1 < 0) || ($nota2 > 10 or $nota2 < 0) || ($nota3 > 10 or $nota3 < 0)) {
        echo "<script>window.alert(\"Insira todas as notas corretamente!\");</script>";
        exit();
    }

    echo "<hr><h1>Olá " . $nome . "</h1> <hr>";
    echo calcularMedia($nota1, $nota2, $nota3);
    echo "<br>Maior nota: " . maiorNota($nota1, $nota2, $nota3);
}

function calcularMedia(float $nota1, float $nota2, float $nota3): string
{
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media > 7) {
        return "Aprovado";
    } else if ($media > 1.7) {
        return "Em recuperação";
    } else {
        return "Reprovado";
    }
}

function maiorNota(float $nota1, float $nota2, float $nota3): float
{
    $maior = $nota1;

    if ($nota2 > $maior) {
        $maior = $nota2;
    }

    if ($nota3 > $maior) {
        $maior = $nota3;
    }

    return $maior;
}
