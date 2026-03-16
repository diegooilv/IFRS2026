<form method="POST">
    <input type="number" name="n1" id="n1" placeholder="N1" min="1" max="31" require>
    <input type="number" step="any" name="n2" id="n2" placeholder="N2" min="1" max="12" require >
    <input type="number" step="any" name="n3" id="n3" placeholder="N3" min="0" require>
    <input type="submit" value="Enviar">
</form>


<?php
function bissexto($n){
    if($n % 4 == 0){
        if($n % 100 == 1 or $n % 400 == 1){
            return false;
        }
        return true;
    }
    return false;
}

$meses = [
    "1" => "Janeiro",
    "2" => "Fevereiro",
    "3" => "Março",
    "4" => "Abril",
    "5" => "Maio",
    "6" => "Junho",
    "7" => "Julho",
    "8" => "Agosto",
    "9" => "Setembro",
    "10" => "Outubro",
    "11" => "Novembro",
    "12" => "Dezembro"
];

$meses_31_dias = [1, 3, 5, 7, 8, 10, 12];
$meses_v = [3,6,8,11];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    if($n2 == 2 and ((int) $n1 > 27)){
        if(!bissexto((int) $n3) and $n1 > 28){
            echo "O ano não é bissexto, só tem 28 dias";
            return;
        }elseif($n1 > 29 ){
            "Só tem 29 dias!";
            return;
        }
    }
    if($n1 > 30 and in_array($n2, $meses_v)){
        echo $meses[$n2] . " não tem " . $n1 . " dias";
        return;
    }
    echo $n1 . " de " . $meses[$n2] . " de " . $n3;
}