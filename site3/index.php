<?php
$title = "Главная страница - страница обо мне";
$header = "Информация обо мне";
$year = date('Y');

$content = file_get_contents(getcwd() . "/site3/site.html");
$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ header }}", $header, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;
