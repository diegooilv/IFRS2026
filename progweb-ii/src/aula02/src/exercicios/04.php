<form method="POST">
    <input type="date" name="date" id="date">
    <input type="submit" value="enviar">
</form>

<?php
$meses = [
    "01" => "Janeiro",
    "02" => "Fevereiro",
    "03" => "Março",
    "04" => "Abril",
    "05" => "Maio",
    "06" => "Junho",
    "07" => "Julho",
    "08" => "Agosto",
    "09" => "Setembro",
    "10" => "Outubro",
    "11" => "Novembro",
    "12" => "Dezembro"
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $arrays = explode("-", $_POST["date"]);
    echo "<br>";
    echo $arrays[2] . " de " . $meses[$arrays[1]] . " de " . $arrays[0];
}
