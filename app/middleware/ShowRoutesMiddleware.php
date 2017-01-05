<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ShowRoutesMiddleware extends \QuickShot\Common\Middleware\AbstractMiddleware {

	public function __invoke(Request $request, Response $response, callable $next) {
	
		if( APP_MODE === "DEV" ) {
			$routes = $this->getContainer()->router->getRoutes();
			foreach( $routes as $route ) {
				$this->debug("Register route " . $route->getMethods()[0] . " " . $route->getPattern() . " " . $route->getCallable());
			}
		}

		return $next($request, $response);
	}
}