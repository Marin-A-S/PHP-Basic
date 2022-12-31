<?php
$numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers2 = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$result = [];

for ($i = 0; $i < sizeof($numbers1); $i++) {
    $result[] = $numbers1[$i] * $numbers2[$i];
}

print_r($result);
