<?php 

namespace App\Handler;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Interop\Container\ContainerInterface as Container;

final class NotFoundHandler extends \Slim\Handlers\NotFound {

	private $view;
	private $logger;
	private $container;

	public function __construct(Container $container) {
		$this->container = $container;
		$this->view = $this->container->view;
		$this->logger = $this->container->logger;
	}

    public function __invoke(Request $request, Response $response) {
        $info = $request->getAttribute('routeInfo');
        //print_r($info);
		if( isset($info["request"]) ) {
        	$this->logger->critical("Page not found " . $info["request"][1]);	
		} else {
			$this->logger->critical("Page not found ");
		}
        
		$this->view->render($response, 'error.twig');
        return $response;
    }
}