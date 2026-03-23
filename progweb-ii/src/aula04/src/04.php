<?php
$dias = [
    "Sunday" => "Domingo",
    "Monday" => "Segunda-feira",
    "Tuesday" => "Terça-feira",
    "Wednesday" => "Quarta-feira",
    "Thursday" => "Quinta-feira",
    "Friday" => "Sexta-feira",
    "Saturday" => "Sábado"
];

$meses = [
    "01" => "janeiro",
    "02" => "fevereiro",
    "03" => "março",
    "04" => "abril",
    "05" => "maio",
    "06" => "junho",
    "07" => "julho",
    "08" => "agosto",
    "09" => "setembro",
    "10" => "outubro",
    "11" => "novembro",
    "12" => "dezembro"
];

date_default_timezone_set("America/Sao_Paulo");

$data = explode(" ", date("l d m Y"));

echo $dias[$data[0]] . ", " . $data[1] . " de " . $meses[$data[2]] . " de " . $data[3];