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
}