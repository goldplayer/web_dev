<?php session_start(); ?>

<?php 

    $name = 'kama';
    $pass = 'coder';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['name']) || empty($_POST['pass'])) {
            
            $error = 'Заполните все поля';
         
        } else {
            if($_POST['name'] !== $name){
                $error = 'Error name';
            }
            elseif($_POST['pass'] !== $pass){
                $error = 'Error password';
            }else{
                $_SESSION['is_logged'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['pass'] = $pass;
                header("Location: admin");
                exit();
            }

        }
    }
?>


<div class="container">
<form id="loginForm" method="post">
    <label for="login">Логин:</label>
    <input type="text" id="name" name="name" >
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="pass" >
    <br>
    <button type="submit">Войти</button>
   <?php if(!empty($error)): ?>
        <div class="alert">
            <?php echo htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>
</form>
<div id="responseMessage"></div>
</div>
