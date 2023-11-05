<?php
    
    include './fct/item.php';
    include './fct/ruquest.php';
    include './Confing/app.php';

    $items = getItems();

    $id = get('item');

    unset($items[$id]);

    saveItems($items);

    header('Location:index.php');