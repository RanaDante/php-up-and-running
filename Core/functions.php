<?php

function abort($error_code = 404) {
    http_response_code($error_code);
    view("error_codes/$error_code.view.php");
    die();
}

spl_autoload_register(function($class) {
    base_location(str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
});


function checkEmptyResults($results) {
    if(empty($results)) {
        abort();
    }
}

function check_authorization($condition) {
    if(! $condition) {
        abort(403);
    }
}

function base_location($location) {
    global $config;
    require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $location;
}

function view($location, $args = []) {
    extract($args);
    require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $location;
}