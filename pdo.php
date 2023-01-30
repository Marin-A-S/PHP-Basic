<?php
$pdo = new PDO('sqlite:database.db');

$statement = $pdo->prepare('SELECT * FROM `users`');
$statement->execute();
$userData = $statement->fetchall(PDO::FETCH_ASSOC);

print_r($userData);
