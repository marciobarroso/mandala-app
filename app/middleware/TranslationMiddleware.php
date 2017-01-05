<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TranslationMiddleware extends \QuickShot\Common\Middleware\AbstractMiddleware {

	public function __invoke(Request $request, Response $response, callable $next) {
		$this->debug("Running ...");

		// translations
		$locale = isset($_REQUEST["lang"]) ? $_REQUEST["lang"] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		$this->debug("Identify default user language : $locale ...");

		$translator = new \Symfony\Component\Translation\Translator($locale, new \Symfony\Component\Translation\MessageSelector());
		$translator->addLoader('php', new \Symfony\Component\Translation\Loader\PhpFileLoader());

		if( !is_file( TRANSLATION_FILE_CHECK ) ) {
			$this->debug("Processing files ...");

			// create dynamically the translation php files, if not exists
			foreach ( glob ( TRANSLATION_FILES_DIR . "/*.properties" ) as $file ) {
				$type = substr($file, strripos($file,".")+1, strlen($file));
				$language = substr($file, strripos($file, "/")+1, strlen($file));
				$language = substr($language, 0, strripos($language, "."));
					
				$arr = parse_ini_file(TRANSLATION_FILES_DIR . '/' . $language . "." . $type);
				$newFile = fopen(TRANSLATION_FILES_DIR . '/' . $language . '.php', "w");
				fwrite($newFile, "<?php\n");
				fwrite($newFile, "return array(");
				$separator = "";
				$content = "";
				foreach($arr as $key => $value) {
					$content .= "$separator'$key' => '$value'";
					$separator = "\n\t\t\t,";
				}
				
				fwrite($newFile, $content);
				fwrite($newFile, ");\n ?>");
			}

			$check = fopen(TRANSLATION_FILE_CHECK, "w");
			fwrite($check, "delete this file just if was made changes in the properties files");
		} 

		// search for translation php files
		if( !isset($_SESSION[IN_SESSION_TRANSLATION_FILES]) ) {
			$this->debug("Saving file references in session ...");
			$language_files = [];
			foreach ( glob ( TRANSLATION_FILES_DIR . "/*.php" ) as $file ) {
				$language_files[] = $file;
			}
			// set in session
			$_SESSION[IN_SESSION_TRANSLATION_FILES] = $language_files;	
		}
		
		$files = $_SESSION[IN_SESSION_TRANSLATION_FILES];
		$langs = [];

		foreach ( $files as $file ) {
			$type = substr($file, strripos($file,".")+1, strlen($file));
			$language = substr($file, strripos($file, "/")+1, strlen($file));
			$language = substr($language, 0, strripos($language, "."));
			$this->debug("Register Language " . $language . " ...");
			$langs[] = $language;
			$translator->addResource("php", TRANSLATION_FILES_DIR . '/' . $language . '.php', $language);
		}

		$container = $this->getContainer();
		$container["locale"] = $locale;
		$container["languages"] = $langs;
		$view = $container->get('view');
		$translator->setFallbackLocales($langs);
		$view->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($translator));

		return $next($request, $response);
	}

}