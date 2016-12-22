<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class AddViewDataMiddleware extends \QuickShot\Common\Middleware\AbstractMiddleware {

	public function __invoke(Request $request, Response $response, callable $next) {
		$this->debug("Running ...");

		$view = $this->getContainer()->get('view');

		$view["ROOT"] = $request->getUri()->getBasePath();
		$view["flash"] = $this->getContainer()->get('flash');
		$view["facebook-login-url"] = $this->getContainer()->get('facebook-login-url');
		
		$this->debug("Add view data ROOT = " . $view["ROOT"]);
		
		if( isset($_SESSION[IN_SESSION_TOKEN]) && isset($_SESSION[IN_SESSION_PERSON]) ) {

			
			
		}

		return $next($request, $response);
	}
}