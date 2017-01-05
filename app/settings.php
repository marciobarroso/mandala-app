<?php

// app settings
define("APP_ID", "MANDALA-APP");
define("APP_MODE", "PRD");

// LOG
define("LOGGER_LEVEL", \Monolog\Logger::INFO);

// add class middleware constants
define("IN_SESSION_ACTION_CLASSES", APP_ID . "IN_SESSION_ACTION_CLASSES");

// translations middleware constants
define("IN_SESSION_TRANSLATION_FILES", APP_ID . "IN_SESSION_TRANSLATION_FILES");
define("TRANSLATION_FILES_DIR", APP_ROOT . "/app/translations");
define("TRANSLATION_FILE_CHECK", TRANSLATION_FILES_DIR . "/delete-if-the-properties-files-was-changed");

// security user objects
define("IN_SESSION_TOKEN", APP_ID . "IN_SESSION_TOKEN");
define("IN_VIEW_PERSON", "IN_VIEW_PERSON");

// facebook api
define("FACEBOOK_APP_ID","1775771606080166");
define("FACEBOOK_APP_KEY","7619147bb83c412a299fe0ae9fa97bd7");

date_default_timezone_set('America/Santiago');

return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => true,
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,

        // View settings
        'view' => [
            'template_path' => APP_ROOT . '/app/views',
            'twig' => [
                'cache' => APP_ROOT . '/storage/cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => 'APP',
            'path' => APP_ROOT. '/storage/logs/' . date("Y-m-d") . '.log'
        ]
    ]
];