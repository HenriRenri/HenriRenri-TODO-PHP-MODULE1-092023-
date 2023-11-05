<?php
    include './fct/item.php';
    include './fct/ruquest.php';
    include './Confing/app.php';

    $items = getItems();

    $id = post('editItem');

    $items[$id]['intitule'] = post('intitule');

    saveItems($items);

    header('Location:index.php');