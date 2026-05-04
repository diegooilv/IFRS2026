<h1>Calculadora</h1>
<form method="POST">
    <input type="number" name="numero1" id="numero1" step="0.001">
    <input type="number" name="numero2" id="numero2">
    <br>
    <label for="op">Escolha a operação:</label>
    <select name="op" id="op">
        <option value="soma">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multi">Multiplicar</option>
        <option value="div">Dividir</option>
    </select>
    <br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!is_numeric($_POST["numero1"]) || empty($_POST["op"]) || !is_numeric($_POST["numero2"])) {
        exit();
    }
    $resultado = 0;
    $num1 = (float) $_POST["numero1"];
    $num2 = (float) $_POST["numero2"];
    $metodo = $_POST["op"];
    switch ($metodo) {
        case "soma":
            $resultado = $num1 + $num2;
            break;
        case "subtrair":
            $resultado = $num1 - $num2;
            break;
        case "multi":
            $resultado = $num1 + $num2;
            break;
        case "div":
            $resultado = $num1 + $num2;
            break;
        default:
            echo "<h1>Erro</h1>";
            exit();
    }
    echo "Resultado: " . sprintf("%.1f", $resultado);
}
