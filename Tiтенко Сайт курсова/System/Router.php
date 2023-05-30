<?php

namespace System;

use Controllers\MainController;

class Router {
    private $routes = [];
    
    public function __construct($routes) 
    {
        $this->routes = $routes;
        $this->controller = new MainController();
    }

    public function run() 
    {
        $pathUrl = parse_url($_SERVER['REQUEST_URI'])['path'];
        
        foreach ($this->routes as $route) {
            if (empty($route['method']) || empty($route['uri'])) {
                echo "Route error: [data/routes.php] - ".json_encode($route).". Required values are missing.";
                die();
            }
            if ($route['uri'] === $pathUrl) {
                if ($_SERVER['REQUEST_METHOD'] === $route['method']) {
                    $this->execute($route);
                }
            }
        }
    }
    
    public function execute($route)
    {
        $action = $route['action'];
        $view = isset($route['view']) ? $route['view'] : '';
        $this->controller->$action($view);
    }
   
}
