<form method="POST">
    <input type="number" name="n1" id="n1" placeholder="N1" step="0.1" require>
    <input type="number" step="any" name="n2" id="n2" step="0.1" placeholder="N2" require>
    <input type="number" step="any" name="n3" id="n3" step="0.1" placeholder="N3" require>
    <input type="submit" value="Enviar">
</form>

<?php
$cont = 0;
function verificar_nota($nota)
{
    global $cont;
    if ($nota >= 0 and $nota <= 10) {
        $cont++;
        return $nota;
    }
    return 0;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $soma = (verificar_nota($n1) + verificar_nota($n2) + verificar_nota($n3)) / $cont;
    echo "Média: " . number_format($soma, 1);
}