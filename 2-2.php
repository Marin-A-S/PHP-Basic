<?php
$str = '';
$taskQuantity = 0;
$timeSum = 0;

$name = readline("Как Вас зовут? ");
$age = (int)readline("Сколько Вам лет? ");

do {
    $taskQuantity = (int)readline("Введите количество запланированных задач на день (от 1 до 10): ");
    $taskQuantity = ($taskQuantity >= 1 && $taskQuantity <= 10) ? $taskQuantity : 0;
} while (!$taskQuantity);

for ($i = 1; $i <= $taskQuantity; $i++) {
    $task = "task$i";
    $time = "time$i";
    $$task = readline("Какая $i задача стоит перед Вами сегодня? ");
    $$time = (int)readline("Сколько примерно времени эта задача займет? ");
}

$str .= "Вас зовут $name, Вам $age лет." . PHP_EOL;
$str .= "$name, сегодня у Вас запланировано $taskQuantity приоритетных задачи на день:" . PHP_EOL;
for ($i = 1; $i <= $taskQuantity; $i++) {
    $task = "task$i";
    $time = "time$i";
    $str .= "- {$$task} ({$$time}ч)" . PHP_EOL;
    $timeSum += $$time;
}
$str .= "Примерное время выполнения плана = {$timeSum}ч";

echo $str;
