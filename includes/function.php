<?php

    require_once ('db_connect.php');

    function get_admin(){
    global $pdo;
    $q = $pdo->prepare('select * from `admin`');
    $q -> execute();
    $rows = $q->fetchAll(PDO::FETCH_ASSOC);

    if($rows){
        echo 'ok';
    }else{
        return false;
    }



    }


  