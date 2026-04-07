<?php

function tabuada($n){
    for($i = 1; $i < 11; $i++){
        $num = $n*$i;
        echo $n . " x " . $i ." = " . $num . "<br>";
    }
}

tabuada(2);