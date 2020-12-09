<?php

class Item extends Database
{
    public function getAllItems()
    {
        return $this->connect()->query("SELECT * FROM items");
    }
}