<?php
    include './fct/item.php';
    include './fct/ruquest.php';
    include './Confing/app.php';

    $items = getItems();

    $id = get('item');

    $items[$id]['checked'] = !$items[$id]['checked'];

    saveItems($items);

    header('Location:index.php');