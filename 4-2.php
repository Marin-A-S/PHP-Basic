<?php
$numbers = range(1,10);

function calculateRange(array $numbers): array
{
    $result["max"] = max($numbers);
    $result["min"] = min($numbers);
    $result["avg"] = array_sum($numbers)/count($numbers);

    return $result;
}

print_r(calculateRange($numbers));
