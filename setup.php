<?php
//Class compiler
require(ABSPATH.'admin/classcompiler.php');

require(ABSPATH.'functions.php');


//maakt een nieuw db object naar hackathondenbosch
$db = new DB('localhost','root','','hackathondenbosch');

//Maakt een router object voor pagination
$router = new Router;
//Redirect naar de goede url
$uri = str_replace('/'.$website_name.'/', '', $_SERVER['REQUEST_URI']);
$uri = rtrim($uri, '/');
if(!array_key_exists($uri, $router->routes)) {
    $uri = '';
}

//FIX ERROR
//$uri = substr($uri, 0, strpos($uri, '?'));

include_once(ABSPATH.'content/load.php');