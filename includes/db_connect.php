<?php

$host = 'localhost'; // Адрес сервера MySQL (можно использовать localhost или IP адрес)
$user = 'root';      // Имя пользователя MySQL
$pass = '';          // Пароль MySQL (если нет пароля, оставь пустым)
$db = 'test';        // Имя базы данных

try {
    // Исправляем строку подключения: убираем лишние запятые и правильно указываем параметры
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch (PDOException $e) {
    die('Ошибка подключения: ' . $e->getMessage());
}
?>