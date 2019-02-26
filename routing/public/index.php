<?php

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require '../views/index.php';
        break;
    // Everything else
    case '404':
        require '..views/404.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}