<?php


namespace App\routing;
use FastRoute\Dispatcher;

class Web
{
    public static function getDispatcher():Dispatcher
    {
        return \FastRoute\simpleDispatcher(
            function (\FastRoute\RouteCollector $route)
            {
                $route->addRoute('GET', '/', ['App\controllers\HomeController', 'index']);
                $route->addRoute('GET', '/about', ['App\controllers\AboutController', 'index']);
                $route->addRoute('GET', '/where', ['App\controllers\WhereController', 'index']);
            }
        );
    }
}