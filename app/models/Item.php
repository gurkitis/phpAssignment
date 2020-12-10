<?php

class Item extends Database
{
    public function getAllItems()
    {
        $result = [];
        $dvds = $this->connect()->query("SELECT * FROM items WHERE Product_type = 'DVD'");
        while($row = $dvds->fetch())
        {
            array_push($result, [$row['SKU'],'<p>'.$row['SKU'].'<br>'.$row['Product_Name'].'<br>'.$row['Price'].' $<br>Size: '.$row['Type_attribute'].'</p>']);
        }
        $books = $this->connect()->query("SELECT * FROM items WHERE Product_type = 'Book'");
        while($row = $books->fetch())
        {
            array_push($result, [$row['SKU'],'<p>'.$row['SKU'].'<br>'.$row['Product_Name'].'<br>'.$row['Price'].' $<br>Weight: '.$row['Type_attribute'].'</p>']);
        }
        $furnitures = $this->connect()->query("SELECT * FROM items WHERE Product_type = 'Furniture'");
        while($row = $furnitures->fetch())
        {
            array_push($result, [$row['SKU'],'<p>'.$row['SKU'].'<br>'.$row['Product_Name'].'<br>'.$row['Price'].' $<br>Dimension: '.$row['Type_attribute'].'</p>']);
        }
        return $result;
    }

    public function existsSku($sku)
    {
        $result = $this->connect()->prepare("SELECT COUNT(*) FROM items WHERE SKU = ?");
        $result->execute([$sku]);
        return (bool)$result->fetch()['COUNT(*)'];
    }
}