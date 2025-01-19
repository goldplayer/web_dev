<?php
    include 'includes/function.php';
    session_start();
    if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] !== true){
     
        header("Location: login");
        exit();

    }else{
        // var_dump($_SESSION['name']);exit;
    }
?>

        
     <div class="row">
        <h1>admin</h1>

        <p>Welcome <?php echo $_SESSION['name']?> </p>

        <a href="logout">LogOut -> </a>
     </div>



