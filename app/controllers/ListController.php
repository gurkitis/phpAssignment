<?php
namespace App\Controllers;
use App\Core\Controller;

class ListController extends Controller
{
    public function index()
    {
        $item = $this->model('Item');
        $items = $item->getAllItems();
        return $this->view('home', ['items' => $items]);
    }

    public function massDelete()
    {
        $item = $this->model('Item');
        foreach ($_POST as $sku => $state)
        {
            if ($item->existsSku($sku) && $state == 'on')
            {
                $item->deleteItem($sku);
            }
        }
        header("Location: /");
    }
}