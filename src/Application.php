<?php

namespace App;

class Application implements ApplicationInterface
{
/**
    private $routes;
    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function run()
    {
        //REQUEST_METHOD
        $url = $_SERVER['REQUEST_URI'];
        foreach($this->routes as $item) {
            list($route, $handler) = $item;
            $preparedRoute = preg_quote($route, '/');
            if (preg_match("/^$preparedRoute$/i", $url)) {
                echo $handler();
                return;
            }
        }
    }
*/

/**
    private $gets = [];
    private $posts = [];
    public function get($path, $func)
    {
        $this->gets[$path] = $func;
    }
    public function post($path, $func)
    {
        $this->posts[$path] = $func;
    }
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_SERVER['REQUEST_URI'];
        if ($method === 'GET') {
            echo $this->gets[$url]();
        } elseif ($method === 'POST') {
            echo $this->posts[$url]();
        }
    }
 */
private $handlers = [];

    public function get($route, $handler)
    {
        $this->append('GET', $route, $handler);
    }

    public function post($route, $handler)
    {
        $this->append('POST', $route, $handler);
    }

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->handlers as $item) {
            [$route, $handlerMethod, $handler] = $item;
            $preparedRoute = preg_quote($route, '/');
            if ($method === $handlerMethod && preg_match("/^$preparedRoute$/i", $uri)) {
                echo $handler();
                return;
            }
        }
    }

    private function append($method, $route, $handler)
    {
        $this->handlers[] = [$route, $method, $handler];
    }
}