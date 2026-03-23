<?php
$n1 = 0;
$n2 = 1;
echo $n1 . "<br>" . $n2 . "<br>";
for ($i = 0; $i < 8; $i++) {
    $n3 = $n1 + $n2;
    echo $n3 . "<br>";
    $n1 = $n2;
    $n2 = $n3;
}