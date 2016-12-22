<?php

	$app->get('/', 'App\Action\HomeAction:dispatch')->setName('home');
	$app->get('/login', 'App\Action\LoginAction:get')->setName('login');