<form method="POST">
    <input type="number" name="peso" step="0.1" id="peso" placeholder="Peso (kg)" required min="1">
    <input type="number" name="altura" step="0.01" id="altura" placeholder="Altura (m)" required min="1" max="2.72">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $peso = (float) $_POST["peso"];
    $altura = (float) $_POST["altura"];
    $imc = $peso / ($altura * $altura);
    echo "Seu imc é " . number_format($imc, 1) . " sendo considerado ";
    if ($imc < 18.6) {
        echo "abaixo do peso";
    } elseif ($imc < 25 and $imc >= 18.6) {
        echo "peso ideal (parabéns)";
    } elseif ($imc >= 25 and $imc < 30) {
        echo "levemente acima do peso";
    } elseif ($imc >= 30 and $imc < 35) {
        echo "obesidade grau I";
    } elseif ($imc >= 35 and $imc < 40) {
        echo "obesidade grau II (severa)";
    } elseif ($imc >= 40) {
        echo "obesidade grau III (mórbida)";
    }
}