<?php
define("TASK", "Какая задача стоит перед Вами сегодня? ");
define("TIME", "Сколько примерно времени эта задача займет? ");

$name = readline("Как Вас зовут? ");
$age = (int)readline("Сколько Вам лет? ");

$task1 = readline(TASK);
$time1 = (int)readline(TIME);
$task2 = readline(TASK);
$time2 = (int)readline(TIME);
$task3 = readline(TASK);
$time3 = (int)readline(TIME);

$timeSum = $time1 + $time2 + $time3;

echo <<<OUT
Вас зовут $name, Вам $age лет.
$name, сегодня у Вас запланировано 3 приоритетных задачи на день:
- $task1 ({$time1}ч)
- $task2 ({$time2}ч)
- $task3 ({$time3}ч)
Примерное время выполнения плана = {$timeSum}ч
OUT;
