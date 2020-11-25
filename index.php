<?php
    require_once 'items.php';
    require_once 'database.php';

    $first = new DVD("kaka", 69.00,60);
    $second = new Book("gramata", 42.00, 0.332);
    
    ItemController::AddItem($first);
    ItemController::AddItem($second);

    $result = DB::Querry("select * from Items");
    while($row = $result->fetch_assoc())
    {
        echo "id: {$row["SKU"]} Name: {$row["Product_Name"]} Price: {$row["Price"]} Type: {$row["Product_type"]} Attribute: {$row["Type_attribute"]}<br>";
    }

    print_r(ItemController::$Items);
?>