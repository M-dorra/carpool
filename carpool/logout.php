<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Ensure cache is cleared and no caching headers are set
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

// Redirect to login page
header("Location: index.html");
exit;
// session_start();
// unset($_SESSION['login']);
// session_destroy();

// header("Location: index.html");
// exit;
?>