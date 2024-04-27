<?php

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'index');
    $r->addRoute(['GET', 'POST'], '/auth', 'auth');
    $r->addRoute(['GET', 'POST'], '/product', 'product');
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        require_once 'app/controllers/' . $handler . '.php';
        break;
}

function redirect($uri) {
    header("Location: " . $uri);
    exit;
}