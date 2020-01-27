<?php

namespace App;
class Core
{
    public function __construct()
    {
        $logManager = new LogManager();
        $logManager->info("iniciando la aplicacion");
        $viewManager = new ViewManager();
        $viewManager->renderTemplate('index.twig.html');
    }
}