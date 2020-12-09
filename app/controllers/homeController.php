<?php

class HomeController extends Controller
{
    public function index()
    {
        $item = $this->model('Item');
        $items = $item->getAllItems();
        return $this->view('home', ['items' => $items]);
    }
}