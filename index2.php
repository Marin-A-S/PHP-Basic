<?php
define("TASK", "Какая задача стоит перед Вами сегодня? ");
define("TIME", "Сколько примерно времени эта задача займет? ");

$tasksQuantity = 3;

$name = readline("Как Вас зовут? ");
$age =  (int)readline("Сколько Вам лет? ");

$count = 1;
$task = "task$count";
$time = "time$count";
$$task = readline(TASK);
$$time = (int)readline(TIME);

$count++;
$task = "task$count";
$time = "time$count";
$$task = readline(TASK);
$$time = (int)readline(TIME);

$count++;
$task = "task$count";
$time = "time$count";
$$task = readline(TASK);
$$time = (int)readline(TIME);

$timeSum = $time1 + $time2 + $time3;

echo <<<OUT
Вас зовут $name, Вам $age лет.
$name, сегодня у Вас запланировано $tasksQuantity приоритетных задачи на день:
- $task1 ({$time1}ч)
- $task2 ({$time2}ч)
- $task3 ({$time3}ч)
Примерное время выполнения плана = {$timeSum}ч
OUT;
