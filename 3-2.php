<?php
$wishes = ['счастья', 'здоровья', 'добра', 'успеха', 'настроения'];
$epithets = ['огромного', 'крепкого', 'настоящего', 'космического', 'сияющего'];
$result = [];
$quantity = 3;

$name = readline('Как Вас зовут? ');

$rand_keys_1 = array_rand($wishes, $quantity);
$rand_keys_2 = array_rand($epithets, $quantity);

for ($i = 0; $i < $quantity; $i++) {
    $result[] = $wishes[$rand_keys_1[$i]] . " " . $epithets[$rand_keys_2[$i]];
}
$str = "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ";
$lastValue = array_pop($result);
$str .= implode(', ', $result) . " и " . $lastValue . "!";

echo $str;
