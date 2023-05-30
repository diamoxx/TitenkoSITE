<?php
session_start();

include 'System/autoload.php';
include 'System/Router.php';
$routes = include("data/routes.php");
$router = new \System\Router($routes);
$router->run();
