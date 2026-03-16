<form method="POST">
    <input type="number" name="n1" id="n1" placeholder="Horas">
    <input type="number" step="any" name="n2" id="n2" placeholder="R$/H">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try{
    $horas = $_POST["n1"];
    $valor = $_POST["n2"];
    $total = $horas * $valor;
    echo ("Total: " . number_format($total, 2) . " R$ no total");
    }catch (Exception $e){
        echo "Erro Erro";
    }
}