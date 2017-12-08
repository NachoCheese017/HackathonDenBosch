<?php
// Unset session var 
$_SESSION = array();

// Retrieve session parameters
$params = session_get_cookie_params();

// Delete session cookie
setcookie(session_name(),
		'', time() - 42000, 
		$params["path"], 
		$params["domain"], 
		$params["secure"], 
		$params["httponly"]);

// Destroy session
session_destroy();

// Header refresh
echo '<script>window.location.href = "ABSPATH";</script>';