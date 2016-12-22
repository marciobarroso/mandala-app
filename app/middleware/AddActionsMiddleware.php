<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class AddActionsMiddleware extends \QuickShot\Common\Middleware\AbstractMiddleware {

	public function __invoke(Request $request, Response $response, callable $next) {
		$this->debug("Running ...");

		$container = $this->getContainer();
		$actions = isset($_SESSION[IN_SESSION_ACTION_CLASSES]) ? $_SESSION[IN_SESSION_ACTION_CLASSES] : [];

		if( sizeof($actions) == 0 ) {
			$this->debug("Processing Actions ...");

			foreach ( glob ( ROOT . '/app/action/*.php' ) as $file ) {
				$action = $this->_get_full_qualified_class_name($file);
				$this->debug("Action $action found");
				$actions[] = $action;
			}
			$_SESSION[IN_SESSION_ACTION_CLASSES] = $actions;
		}

		foreach( $actions as $action ) {
			$this->debug("Register action " . $action . " ...");
			$instance = new $action($container);
			$container[$action] = $instance;
		}

		return $next($request, $response);
	}

	private function _get_full_namespace($filename) {
	    $lines = file($filename);
	    $namespaceLine = array_shift(preg_grep('/^namespace /', $lines));
	    $match = array();
	    preg_match('/^namespace (.*);$/', $namespaceLine, $match);
	    $fullNamespace = array_pop($match);

	    return $fullNamespace;
	}

	private function _get_class_name($filename) {
	    $directoriesAndFilename = explode('/', $filename);
	    $filename = array_pop($directoriesAndFilename);
	    $nameAndExtension = explode('.', $filename);
	    $className = array_shift($nameAndExtension);

	    return $className;
	}

	private function _get_full_qualified_class_name($filename) {
		return $this->_get_full_namespace($filename) . '\\' . $this->_get_class_name($filename);
	}

}