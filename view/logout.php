<?php
  
    session_start();

    session_unset();

    session_destroy();

    header("Location: index");

    exit();


?>


<!-- <h1>hello</h1> -->