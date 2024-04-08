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
     * If you wish to unload this file, remove the reference in RoutesService.php
     */


    /**
     *
     *  _  _    ___  _  _
     * | || |  / _ \| || |
     * | || |_| | | | || |_
     * |__   _| | | |__   _|
     *    | | | |_| |  | |
     *    |_|  \___/   |_|
     *
     * Catch-all route to serve a 404 Not Found page if none of the routes match
     * NOTE: make sure this route is defined last
     */
    $app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
        //return $this->get('view')->render($response, "404.twig");
        $response->getBody()->write('404');
        return $response;
    });
};