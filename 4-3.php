<?php
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$text = (string)readline("Введите название предмета для поиска: ");

function searchItem(string $item, array $box): bool
{
    foreach ($box as $value) {
        if (is_array($value)) {
            if (searchItem($item, $value)) {
                return true;
            }
        } elseif ($item === $value) {
            return true;
        }
    }
    return false;
}

if (searchItem($text, $box)) {
    echo 'Искомый предмет найден';
} else {
    echo 'Искомый предмет не найден';
}
