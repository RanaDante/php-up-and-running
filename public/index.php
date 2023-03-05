<?php

use Core\Router;

require('../Core/functions.php');
$config = require('../config.php');

//base_location('Core/Validator.php');
//base_location('Core/Database.php');

//$routes = require('../routes.php');
// If File is not found redirect back to php
//done with .htaccess

// then handle the code accordingly
//$request_uri = parse_url($_SERVER['REQUEST_URI'])['path'];

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

//if(array_key_exists($request_uri, $routes)) {
//    base_location($routes[$request_uri]);
//}else {
//    abort();
//}
$request_uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$request_method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

base_location('Core/Router.php');
$route = new Router();
require('../routes.php');


$route->route($request_uri, $request_method);
