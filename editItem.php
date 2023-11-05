<?php
    include './fct/item.php';
    include './fct/request.php';
    include './config/app.php';
    include './connexion.php';

    #TODO a supprimer
    $id = post('editItem');

    $query = 'UPDATE todo SET intitule=:intitule WHERE id=:id';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam('intitule',post('intitule'));
    $stmt->bindParam('id',$id);
    $stmt->execute();

    header('Location:index.php');