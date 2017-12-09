<?php

class Router {

    public $routes = array(
        '' => 'content/public/controllers/home-controller.php',
        'market' => 'content/public/controllers/market-controller.php',
        'product'=>'content/public/controllers/product-controller.php',
        'register'=>'content/public/controllers/register-controller.php',
        'logout'=>'content/public/controllers/logout-controller.php',
    	'change'=>'content/public/controllers/change-controller.php',
        'data'=>'content/public/controllers/data-controller.php',
        'newproduct'=>'content/public/controllers/new_product-controller.php');

    public function direct($uri) {
        return $this->routes[$uri];
    }

}
