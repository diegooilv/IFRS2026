<?php
$string = "Oi Oi Oi bla asa Oi oi";
$palavra = "Oi";

function contar($string, $palavra){
    $array = explode(" ", $string);
    $array = array_map(function ($i){return strtolower($i);}, $array);
    $array2 = array_count_values($array);
    $num = $array2[strtolower($palavra)];
    echo $num;
}

contar($string, $palavra);