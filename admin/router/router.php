<?php

class Router {
    
    public $routes = array(
        '' => 'content/public/controllers/home-controller.php',
        'market' => 'content/public/controllers/market-controller.php');
    
    public function direct($uri) {
        return $this->routes[$uri];
    }
    
}