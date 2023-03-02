<?php

$routes = require('routes.php');
// If File is not found redirect back to php
//done with .htaccess

// then handle the code accordingly
$request_uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//if($request_uri === 'index.php') {
//    require("controllers/$request_uri");
//}else if($request_uri === 'about.php') {
//    require("controllers/$request_uri");
//}else {
//    http_response_code(404);
//    require('views/404.view.php');
//}

//if file is found
// move the user flow to specific controller or abort

if(array_key_exists($request_uri, $routes)) {
    require($routes[$request_uri]);
}else {
    abort();
}