<?php
$number = 0;

do {
    $number = (int)readline("Введите целое положительное число от 1 до 5: ");
    $number = ($number > 0) ? $number : 0;
} while (!$number);

$number = $number % 8;

switch ($number) {
    case 1:
        echo "Это большой палец";
        break;
    case 0:
    case 2:
        echo "Это указательный палец";
        break;
    case 3:
    case 7:
        echo "Это средний палец";
        break;
    case 4:
    case 6:
        echo "Это безымянный палец";
        break;
    case 5:
        echo "Это мизинец";
        break;
}
