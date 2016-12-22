<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class BenchmarkMiddleware extends \QuickShot\Common\Middleware\AbstractMiddleware {

	public function __invoke(Request $request, Response $response, callable $next) {
		$headers = $response->getHeaders(); 
		$contentType = $headers["Content-Type"];

		if( strpos($contentType[0], "text/html") === 0 ) {
			$uri = $request->getUri();
			$method = $request->getMethod();
			$this->debug("Running for $method $uri");
			$start = microtime(true);
 		}

		$response = $next($request, $response);

		if( strpos($contentType[0], "text/html") === 0 ) {
			$taken = microtime(true) - $start;
 			$response->write("<!-- Time taken: $taken -->");
			$this->debug("Stopping $method $uri in $taken");
		}

		return $response;
	}
}