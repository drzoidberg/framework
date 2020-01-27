<?php

namespace App;
use App\routing\Web;

class Core
{
    public function __construct()
    {
        $logManager = new LogManager();
        $logManager->info("iniciando la aplicacion");

        /* previamente */
        //$viewManager = new ViewManager();
        //$viewManager->renderTemplate('index.twig.html');

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $routeManager = new RouteManager();
        $routeManager->dispatch($httpMethod, $uri, Web::getDispatcher());
    }
}