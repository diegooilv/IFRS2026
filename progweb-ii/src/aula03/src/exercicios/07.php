<?php
$joao = 0.8; // 6cm ano
$juca = 0.6; // 9cm ano

$cont = 0;
while($joao >= $juca){
    $joao += 0.06;
    $juca += 0.09;
    $cont++;
    echo "Ano " . $cont . " joao: " . $joao . "cm e juca: " . $juca . "cm<br>";
}

echo "<br><br>FIMM, se passaram " . $cont . " anos";