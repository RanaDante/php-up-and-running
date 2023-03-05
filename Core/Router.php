<?php

namespace Core;
class Router {
    public $routes = [];

    private function add_to_routes($method, $uri, $controller) {
        $this->routes[$uri] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller) {
        $this->add_to_routes('GET', $uri, $controller);
    }

    public function post($uri, $controller) {
        $this->add_to_routes('POST', $uri, $controller);
    }

    public function delete($uri, $controller) {
        $this->add_to_routes('DELETE', $uri, $controller);
    }

    public function put($uri, $controller) {
        $this->add_to_routes('PUT', $uri, $controller);
    }

    public function patch($uri, $controller) {
        $this->add_to_routes('PATCH', $uri, $controller);
    }

    public function route($uri, $method) {
        if($this->routes[$uri]['uri'] === $uri && $this->routes[$uri]['method'] === strtoupper($method)) {
            base_location($this->routes[$uri]['controller']);
        }else {
            $this->abort();
        }
    }

    public function abort($error_code = 404) {
        http_response_code($error_code);
        view("error_codes/$error_code.view.php");
        die();
    }

}