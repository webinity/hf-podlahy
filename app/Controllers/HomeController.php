<?php

namespace Webinity\App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Webinity\Framework\Controller;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class HomeController extends Controller
{

    /**
     * @param Request $request
     * @param Response $response
     * @return ResponseInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index(Request $request, Response $response) : ResponseInterface
    {
        return $this->view->render($response, 'index.twig', ['text' => 'Hello World from Controller']);
    }
}