<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$maior = $nums[0];
for ($i = 1; $i < count($nums); $i++) {
    if ($nums[$i] > $maior) {
        $maior = $nums[$i];
    }
}
