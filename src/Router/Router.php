<?php

namespace DesignPatterns\Router;

use src\Container\Container;

class Router
{
    private $config = [];
    private $container;

    public function __construct(array $config = [],Container $container)
    {
        $this->config = $config;
        $this->container = $container;
        return $this;
    }

    public function route()
    {
        $route =  $_GET['route'];
        if(isset($this->config[$route])){
            $controller = $this->container->get($this->config[$route]);
            echo $controller->indexAction();
        } else {
            header("HTTP/1.0 404 Not Found");
            echo ' Page non trouvée ';
        }
    }
}