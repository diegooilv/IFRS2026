<form method="POST">
    <input type="number" name="n1" id="n1" placeholder="N1">
    <input type="number" step="any" name="n2" id="n2" placeholder="N2">
    <input type="number" step="any" name="n3" id="n3" placeholder="N3">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $maior = $n1;
    if($n2 > $maior){
        $maior = $n2;
    }
    if($n3 > $maior){
        $maior = $n3;
    }
    echo ("Maior: ". $maior);
}