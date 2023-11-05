<?php
    include './fct/item.php';
    include './fct/request.php';
    include './config/app.php';
    include './connexion.php';



    #TODO a supprimer
    $id = get('item');

    $query = 'UPDATE todo SET checked=1-checked WHERE id=:id';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam('id',$id);
    $stmt->execute();

    header('Location:index.php');