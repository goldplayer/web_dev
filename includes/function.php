<?php

    require_once ('db_connect.php');

    function get_admin(){
        global $pdo;
        $q = $pdo->prepare("select * from `admin` where `login` = :login");
        $q->bindParam(':login', $login, PDO::PARAM_STR);
        $q->execute();
        $admin = $q->fetch(PDO::FETCH_ASSOC);


        if($admin && password_verify($password, $admin['password'])){
            return true;
        }

        return false;
        


    }


  