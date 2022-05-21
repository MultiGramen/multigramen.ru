<?php
session_start();
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="css/main.css">
    <?php require ('components/connection.php'); ?>
</head>
<body>
<div class="wrapper">
    <?php require_once ('components/navbar.php'); ?>
    <form class="authentication" action="components/auth.php" method="POST">
        <h3>Аутентификация</h3>
        <div class="username">
            <input type="text" name="login" pattern="^[a-zA-Z0-9]+$" placeholder="Логин">
        </div>
        <div class="password">
            <input type="password" name="password" placeholder="Пароль">
        </div>
        <button class="login" type="submit">Войти в аккаунт</button>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="message"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
    </form>
    <?php require_once ('components/footer.php'); ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>