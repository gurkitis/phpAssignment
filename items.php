<?php
    class ItemController
    {
        public $items = array();

        function __construct() {}

        function AddItem($item)
        {
            array_push($this->items, $item);
        }
    }

    abstract class Item 
    {
        protected static $Nr = 0;
        public $SKU;
        public $Name;
        public $Price;
    }

    class DVD extends Item
    {
        public $Size;

        function __construct($name, $price, $size)
        {
            self::$Nr++;
            $this->SKU = self::$Nr;
            $this->Name = $name;
            $this->Price = $price;
            $this->Size = $size;
        }
    }

    class Book extends Item
    {
        public $Weight;

        function __construct($name, $price, $weight)
        {
            self::$Nr++;
            $this->SKU = self::$Nr;
            $this->Name = $name;
            $this->Price = $price;
            $this->Weight = $weight;
        }
    }

    class Furniture extends Item
    {
        public $Dimensions;

        function __construct($name, $price, $dimensions)
        {
            self::$Nr++;
            $this->SKU = self::$Nr;
            $this->Name = $name;
            $this->Price = $price;
            $this->Dimensions = $dimensions;
        }
    }
?>