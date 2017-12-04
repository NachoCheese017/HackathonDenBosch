<?php

require(ABSPATH.'admin/classcompiler.php');

$router = new Router;
$db = new DB('localhost','root','','HackathonDenBosch');

$uri = str_replace('/'.$website_name.'/', '', $_SERVER['REQUEST_URI']);
$uri = substr($uri, 0, strpos($uri, '?'));

include(ABSPATH.'content/load.php');