<?php
session_start();
require_once 'connection.php';

$username = $_POST['login'];
$password = $_POST['password'];
$connection = new PDO('mysql:host=localhost;dbname=multigramen;charset=utf8', 'root', 'root');

$query = $connection->query("SELECT * FROM `users` WHERE `login`='$username'");
$row = $query->featch(PDO::FETCH_ASSOC);

if (!empty(password_verify($password, $row['password']))) {
    echo 'Всё правильно!';
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../login.php');

    var_dump($_SESSION['message']);
}
unset ($row['password']);