<?php

$ss = "quantas palavras tem aqui";

function contar($s){
    $array = explode(" ", $s);
    echo count($array);
}

contar($ss);