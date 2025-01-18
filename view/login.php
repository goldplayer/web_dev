<?php session_start(); ?>

<?php 

    $name = 'kama';
    $pass = 'coder';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['name'] === $name && $_POST['pass'] === $pass) {
            $_SESSION['is_logged'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['pass'] = $pass;
            // var_dump($_SESSION);exit;
            // Перенаправление
            header("Location: admin");
            exit(); // Обязательно завершайте выполнение скрипта после header
        } else {
            echo 'error';
        }
    }
?>


<div class="container">
<form id="loginForm" method="post">
    <label for="login">Логин:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="pass" required>
    <br>
    <button type="submit">Войти</button>
</form>
<div id="responseMessage"></div>
</div>
