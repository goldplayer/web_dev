<?php

include 'includes/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // По умолчанию страница home

switch ($page) {
    case 'login':
        include 'view/login.php';
        break;
    case 'registration':
        include 'view/registration.php';
        break;
    case 'admin':
        include 'view/admin.php';
        break;
    case 'home':
        include 'view/home.php';
        break;
    default:
        include 'view/404.php'; // Страница ошибки 404, если страница не найдена
        break;
}


include 'includes/footer.php';

?>
