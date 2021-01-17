<?php
namespace App\Models;

use App\Core\Database;

class Item extends Database
{
    public function getAllItems()
    {
        $result = [];
        $dvds = $this->connect()->query("SELECT * FROM items WHERE Product_type = 'DVD'");
        while($row = $dvds->fetch())
        {
            array_push($result, [$row['SKU'],
            $row['SKU'].'<br>'.$row['Product_Name'].'<br>'.$row['Price'].' $<br>
            Size: '.$row['Type_attribute']]);
        }
        $books = $this->connect()->query("SELECT * FROM items WHERE Product_type = 'Book'");
        while($row = $books->fetch())
        {
            array_push($result, [$row['SKU'],
            $row['SKU'].'<br>'.$row['Product_Name'].'<br>'.$row['Price'].' $<br>
            Weight: '.$row['Type_attribute']]);
        }
        $furnitures = $this->connect()->query("SELECT * FROM items WHERE Product_type = 'Furniture'");
        while($row = $furnitures->fetch())
        {
            array_push($result, [$row['SKU'],
            $row['SKU'].'<br>'.$row['Product_Name'].'<br>'.$row['Price'].' $<br>
            Dimension: '.$row['Type_attribute']]);
        }
        return $result;
    }       

    //true if db contains such sku
    public function existsSku($sku)
    {
        $result = $this->connect()->prepare("SELECT COUNT(*) FROM items WHERE SKU = ?");
        $result->execute([$sku]);
        return (bool)$result->fetch()['COUNT(*)'];
    }

    public function insertItem($sku, $name, $price, $type, $attribute)
    {
        $result = $this->connect()->prepare("INSERT INTO items (SKU, Product_Name, Price, Product_type, Type_attribute) VALUES (?,?,?,?,?)");
        $result->execute([$sku, $name, $price, $type, $attribute]);
    }

    public function deleteItem($sku)
    {
        $result = $this->connect()->prepare("DELETE FROM items WHERE SKU = ?");
        $result->execute([$sku]);
    }
}