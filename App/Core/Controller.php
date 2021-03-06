<?php
namespace App\Core;

class Controller
{
    public function model($model)
    {
        $model = '\App\\Models\\'.$model;
        return new $model;
    }

    public function view($view, $data = [])
    {
        require_once '../App/views/'.$view.'.php';
    }
}