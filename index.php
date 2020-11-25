<?php
    require 'items.php';

    $controller = new ItemController();
    $first = new DVD("kaka", 69.00,60);
    $second = new Book("gramata", 42.00, 0.332);
    
    $controller->AddItem($first);
    $controller->AddItem($second);

    print_r($controller->items);
?>