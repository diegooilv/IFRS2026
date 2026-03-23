<?php
for ($i = 1; $i <= 500; $i++) {
    if (!($i % 3 == 0 or $i % 5 == 0)) {
        echo "{$i} <br>";
        continue;
    }
    if ($i % 3 == 0) {
        echo "Fizz";
    }
    if ($i % 5 == 0) {
        echo "Buzz";
    }
    echo "<br>";
}