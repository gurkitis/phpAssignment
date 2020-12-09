<?php

class ItemController extends Controller
{
    public function index()
    {
        $item = $this->model('Item');
        $items = $item->getAllItems();
        return $this->view('home', ['items' => $items]);
    }

    public function create()
    {
        return $this->view('create');
    }

    public function saveDVD()
    {
        echo $_POST['sku'];
        $item = $this->model('Item');
        $items = $item->getAllItems();
        return $this->view('home', ['items' => $items]);
    }

    public function saveBook()
    {
        $item = $this->model('Item');
        $items = $item->getAllItems();
        return $this->view('home', ['items' => $items]);
    }

    public function saveFurniture()
    {
        $item = $this->model('Item');
        $items = $item->getAllItems();
        return $this->view('home', ['items' => $items]);
    }
}