<?php

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

define('WEB_ROOT', __DIR__);

define('APP_ROOT', dirname(WEB_ROOT));

require APP_ROOT . '/vendor/autoload.php';

session_start();

$app = new \Slim\App(require APP_ROOT . '/app/settings.php');

// Set up container
require APP_ROOT . '/app/container.php';

// Register middleware
require APP_ROOT . '/app/middleware-before-request.php';

// Register routes
require APP_ROOT . '/app/routes.php';

// Register middleware
require APP_ROOT . '/app/middleware-after-request.php';

// Run!
$app->run();