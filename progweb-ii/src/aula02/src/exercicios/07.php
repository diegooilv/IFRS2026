<?php
function primoVerify($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 100; $i++) {
    if (primoVerify($i)) {
        echo "{$i} é primo!<br>";
    }
}