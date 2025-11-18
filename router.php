<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd(parse_url($url)['path']);


// if($url == '/'){
//     require "controllers/index.php";
// }else if($url == '/about'){
//     require "controllers/about.php";
// }else if($url == '/contact'){
//     require "controllers/contact.php";
// }

$routes = [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
];

function abort($code = 404)
{
    http_response_code($code);
    $heading = 404;
    require "views/{$code}.php";
    die();
}

function routeToController($url, $routes)
{

    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort(404);
    }
}

routeToController($url, $routes);