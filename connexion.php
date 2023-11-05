<?php
    include './config/db.php';

    $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;

    try
    {
        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e)
    {
        echo 'Erreur de connexion : '.$e->getMessage();

    }