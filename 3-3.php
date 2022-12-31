<?php
$students = [
    'ИТ20' => [
        'Алексей Петров' => 4,
        'Михаил Самсонов' => 3,
        'Андрей Нестеров' => 5,
        'Денис Пастернак' => 2,
        'Виктор Новиков' => 3,
        'Дарья Шувалова' => 5,
        'Екатерина Смехова' => 2,
        'Евгения Калюжная' => 3
    ],
    'БАП20' => [
        'Александр Смирнов' => 5,
        'Дмитрий Семенов' => 4,
        'Владислав Парфенов' => 4,
        'Иван Ионов' => 3,
        'Николай Москвин' => 5,
        'Никита Авдеев' => 2,
        'Наталья Рябинина' => 2,
        'Екатерина Лисенкова' => 4
    ]
];
$averageGrade = [];   // список оценок успеваемости
$expelledStudents = []; // список студентов на отчисление
$str = '';
$flag = true;

foreach ($students as $group => $studentList) {
    ksort($studentList);
    $averageGrade[$group] = array_sum($studentList) / sizeof($studentList);
    foreach ($studentList as $student => $grade) {
        if ($grade < 3) {
            $expelledStudents[$group][] = $student;
        }
    }
}

foreach ($averageGrade as $group => $result) {
    if (max($averageGrade) === $result && $result !== 0) {
        if ($flag) {
            $str .= "* Наибольшая успеваемость ($result) у группы" . PHP_EOL;
            $flag = false;
        }
        $str .= "- $group" . PHP_EOL;
    }
}

echo $str; // вывод группы с наибольшей успеваемостью

$str = "* Список студентов на отчисление:" . PHP_EOL;
foreach ($expelledStudents as $group => $listStudents) {
    $str .= "Группа $group:" . PHP_EOL;
    foreach ($listStudents as $student) {
        $str .= "- $student" . PHP_EOL;
    }
}

echo $str; // вывод списка студентов на отчисление
print_r($expelledStudents);
