<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();
$pdo = require 'database.php';

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $userProvider = new UserProvider($pdo);
        if (!$userProvider->userExist($_POST['username'])) {
            $user = new User($_POST['username']);
            $user->setName('Student');
            $userProvider->registerUser($user, $_POST['password']);
            $_SESSION['username'] = $user;
            header('Location: /');
            die();
        } else {
            $error = 'User is already registered';
        }
    } else {
        $error = 'Username or password is not set';
    }
}

include 'view/signup.php';
