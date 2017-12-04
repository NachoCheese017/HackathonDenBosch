<?php
//Class compiler
require(ABSPATH.'functions.php');
require(ABSPATH.'admin/classcompiler.php');

//maakt een nieuw db object naar hackathondenbosch
$db = new DB('localhost','root','','hackathondenbosch');

//Maakt een router object voor pagination
$router = new Router;

//Redirect naar de goede url
$uri = str_replace('/'.$website_name.'/', '', $_SERVER['REQUEST_URI']);
$uri = substr($uri, 0, strpos($uri, '?'));

include_once(ABSPATH.'content/load.php');