<?php
$total = 0;
for ($i = 2020; $i >= 2; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
        $total++;
    }
}
echo "<h1> Total: {$total} </h1>";
