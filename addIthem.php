<?php
    include './Confing/app.php';
    include './fct/ruquest.php';
    include './fct/item.php';

    $intitule = post('intitule');


    $items = getItems();
    $items[uniqid()] = [
        'checked' => false,
        'intitule' => $intitule
    ];

    saveItems($items);

    header('Location:index.php');