<?php

use Slim\App;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\Twig;

return function (App $app, Twig $view){
    /**
     * Register web routes here
     * This file gets loaded only if RoutesService is loaded in config
     *
     * If you wish to unload this specific file, remove the reference in RoutesService.php
     */
    $app->get('/', function (Request $request, Response $response) use ($view) {
        return $view->render($response, 'index.twig', ['text' => 'Hello World']);
    });

    $app->get('/controller', \Webinity\App\Controllers\HomeController::class . ':index');
};
