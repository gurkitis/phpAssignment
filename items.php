<?php
    require_once "itemController.php";

    abstract class Item 
    {
        protected static $Nr = 0;
        public $SKU;
        public $Name;
        public $Price;

        public function __destruct() {}
    }

    class DVD extends Item
    {
        public $Size;

        public function __construct($name, $price, $size)
        {
            self::$Nr++;
            $this->SKU = self::$Nr;
            $this->Name = $name;
            $this->Price = $price;
            $this->Size = $size;
            ItemController::AddItem($this);
        }
    }

    class Book extends Item
    {
        public $Weight;

        public function __construct($name, $price, $weight)
        {
            self::$Nr++;
            $this->SKU = self::$Nr;
            $this->Name = $name;
            $this->Price = $price;
            $this->Weight = $weight;
            ItemController::AddItem($this);
        }
    }

    class Furniture extends Item
    {
        public $Dimensions;

        public function __construct($name, $price, $dimensions)
        {
            self::$Nr++;
            $this->SKU = self::$Nr;
            $this->Name = $name;
            $this->Price = $price;
            $this->Dimensions = $dimensions;
            ItemController::AddItem($this);
        }
    }