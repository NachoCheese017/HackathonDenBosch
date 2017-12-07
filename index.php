<?php
$website_name = "HackathonDenBosch";
$webpath = $_SERVER["SERVER_NAME"]."/$website_name/";
//Absolute path
define('ABSPATH', dirname(__FILE__).'/');

require_once(ABSPATH.'setup.php');
// hallo