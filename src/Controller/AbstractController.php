<?php

namespace Bike\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Interop\Container\ContainerInterface;

 
abstract class AbstractController 
{
    protected $container;

    // protected $renderer;

    protected $db;

    protected $view;

    protected $redis;

    protected $mongo;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        // $this->renderer = $container->get('renderer');
        $this->db = $container->get('db');
        $this->view = $container->get('twig');
        $this->redis = $container->get('redis');
        $this->mongo = $container->get('mongodb');
    }



    public function __invoke(Request $request)
    {
        $action = 'http' . ucfirst(strtolower($request->getMethod()));
        return call_user_func_array([$this, $action], func_get_args());
    }

}
