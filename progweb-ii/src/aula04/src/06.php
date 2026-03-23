<form method="post">
    <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $n = $_POST['numero'];
    $soma = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $n) {
        echo "$n é um número perfeito";
    } else {
        echo "$n não é um número perfeito";
    }
}