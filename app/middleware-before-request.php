<?php
	
    $app->add(new App\Middleware\AddViewDataMiddleware($container));
	$app->add(new App\Middleware\TranslationMiddleware($container));
	$app->add(new App\Middleware\AddActionsMiddleware($container));
	$app->add(new App\Middleware\CleanerMiddleware($container));
	
	