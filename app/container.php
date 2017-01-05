<?php

$container = $app->getContainer();

// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new \Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new \Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['logger']['path'], LOGGER_LEVEL));
    return $logger;
};

// ErrorHandler
$container['errorHandler'] = function($c) {
    //return new App\Handler\ErrorHandler($c);
};

// NotFoundHandler
$container['notFoundHandler'] = function($c) {
    //return new App\Handler\NotFoundHandler($c);
};

// database connection
$container['connection'] = function($c) {
    return new \QuickShot\Common\DBService($c);
};

// facebook api
$container['facebook-api'] = function($c) {
    return new \Facebook\Facebook([
        'app_id' => FACEBOOK_APP_ID,
        'app_secret' => FACEBOOK_APP_KEY,
        'default_graph_version' => 'v2.8'
    ]);
};

$container['facebook-login-url'] = function($c) {
    $facebook = $container['facebook-api'];
    $permissions = ['email']; 
    $helper = $facebook->getRedirectLoginHelper();
    return $helper->getLoginUrl('http://mandala-app.com/login', $permissions);
};