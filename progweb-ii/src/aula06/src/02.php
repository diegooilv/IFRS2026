<?php

function bissexto($n){
    if($n % 4 == 0){
        if($n % 100 == 1 or $n % 400 == 1){
            echo "Não é bissexto";
            return;
        }
        echo "É bissexto";
        return;
    }
    echo "Não é bissexto";
    return;
}

bissexto(2020);