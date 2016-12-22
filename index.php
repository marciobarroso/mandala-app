<?php

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

define('ROOT', __DIR__);

require ROOT . '/vendor/autoload.php';

session_start();

$app = new \Slim\App(require ROOT . '/app/settings.php');

// Set up container
require ROOT . '/app/container.php';

// Register middleware
require ROOT . '/app/middleware-before-request.php';

// Register routes
require ROOT . '/app/routes.php';

// Register middleware
require ROOT . '/app/middleware-after-request.php';

// Run!
$app->run();