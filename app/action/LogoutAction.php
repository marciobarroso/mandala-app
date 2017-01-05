<?php
namespace App\Action;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class LogoutAction extends \QuickShot\Common\Action\AbstractAction {

    public function dispatch(Request $request, Response $response) {
        $this->info("Running ...");
		$this->getView()->render($response, 'home.twig');
        return $response;
    }
}
