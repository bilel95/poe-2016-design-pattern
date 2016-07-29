<?php
/**
 * Created by PhpStorm.
 * User: bilel
 * Date: 29/07/16
 * Time: 11:23
 */

namespace DesignPatterns\Router;


use DesignPatterns\Container\FactoryInterface;
use Interop\Container\ContainerInterface;

class RouterFactory implements FactoryInterface
{

    public function createService(ContainerInterface $container)
    {
        $configuration = $container->get('configuration');
        if(!$configuration->offsetExists('routes')){
            $configuration->offsetSet('routes',[]);
        }

        $configRoute = $configuration->offsetGet('routes')->getArrayCopy();

        $router = new Router($configRoute,$container);

    }
}