<?php
namespace App\Core;

class App 
{
    protected $controller = 'ListController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {

        $url = $this->parseUrl();
        if (isset($url[0]) && file_exists(__DIR__.'/../Controllers/'.$url[0].'.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }

        $class = "App\\Controllers\\".$this->controller;
        $this->controller = new $class;

        if (isset($url[1]))
        {
            if (method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl()
    {
        if (isset($_SERVER['REQUEST_URI']))
        {
            return $url = explode('/', filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
        }
        else
        {
            return null;
        }
    }
}