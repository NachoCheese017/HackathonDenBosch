<?php

class Router {
    
    public $routes = array(
        '' => 'content/public/controllers/home-controller.php');
    
    public function direct($uri) {
        return $this->routes[$uri];
    }
    
}