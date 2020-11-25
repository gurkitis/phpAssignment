<?php
    require_once "items.php";

    class ItemController
    {
        public static $Items = array();
        public static $CheckedItems = array();

        public function __construct() {}

        //Add to DB
        public static function AddItem($item)
        {
            array_push(self::$Items, $item);
        }

        public static function CheckItem($sku)
        {
            foreach (self::$Items as $item)
            {
                if ($item->SKU == $sku)
                {
                    array_push(self::$CheckedItems, $item);
                    break;
                }
            }
        }

        public static function UncheckItem($sku)
        {
            for ($x = 0; $x < count(self::$CheckedItems); $x++)
            {
                if (self::$CheckedItems[$x]->SKU == $sku)
                {
                    unset(self::$CheckedItems[$x]);
                    break;
                }
            }
        }

        //Delete from DB
        public static function DeleteCheckedItems()
        {
            foreach (self::$CheckedItems as $item)
            {
                $item->__destruct();
            }
        }
    }