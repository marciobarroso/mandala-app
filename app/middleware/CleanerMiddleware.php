<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class CleanerMiddleware extends \QuickShot\Common\Middleware\AbstractMiddleware {

	public function __invoke(Request $request, Response $response, callable $next) {
		$this->debug("Running ...");
		$param = $request->getParam('CLEAR_SESSION');

		if( APP_MODE === "DEV" || $param ) {
			$this->debug("Cleaning all ...");
			session_destroy();
        	unset($_SESSION);
		}

		return $next($request, $response);
	}

}