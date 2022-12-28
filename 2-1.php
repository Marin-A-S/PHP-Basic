<?php
const QUESTION = "В каком году произошло крещение Руси?
Варианты ответа: 740, 810 или 988 год.";

$answer = '';

do {
    echo QUESTION . PHP_EOL;
    $answer = readline("Ваш ответ: ");
    $answer = ($answer == "740" || $answer == "810" || $answer == "988") ? $answer : '';
} while (!$answer);

if ($answer == "988") {
    echo "Поздравляем, Вы дали правильный ответ!";
} else {
    echo "Это неправильный ответ.";
}
