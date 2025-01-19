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

<section class="form_login">
    
<div class="container ">
        <form class="login_form" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" type="submit">Войти</button>
        <?php if(!empty($error)): ?>
                <div class="alert">
                    <?php echo htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
        </form>
    <div id="responseMessage"></div>
</div>

</section>
