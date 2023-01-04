<?php
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = array_map(function($item) {
    if ($item % 2 === 0) {
        return "четное";
    } else {
        return "нечетное";
    }
}, $numbers);

print_r($result);
