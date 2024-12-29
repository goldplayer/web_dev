<?php

    require_once ('db_connect.php');

    $q = $pdo->prepare('select * from `admin`');
    $q -> execute();
    $rows = $q->fetchAll(PDO::FETCH_ASSOC);

    var_dump($q);
    print_r($rows);