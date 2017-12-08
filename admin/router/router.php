<?php

class Router {
    
    public $routes = array(
        '' => 'content/public/controllers/home-controller.php',
        'market' => 'content/public/controllers/market-controller.php',
        'product'=>'content/public/controllers/product-controller.php',
        'register'=>'content/public/controllers/register-controller.php',
        'logout'=>'content/public/controllers/logout-controller.php');
    
    public function direct($uri) {
        return $this->routes[$uri];
    }

}