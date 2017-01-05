<?php
namespace App\Action;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class LoginAction extends \QuickShot\Common\Action\AbstractAction {

    public function get(Request $request, Response $response) {
        $this->info("Running ...");
		
        try {
            
            /*

            // load facebook api from ioc container
            $facebook = $this->getContainer()->get('facebook-api');
            echo "facebook ";
            print_r($facebook);
            $helper = $facebook->getRedirectLoginHelper();
            echo "helper ";
            print_r($helper);
            $accessToken = $helper->getAccessToken();
            echo $accessToken;

            /*

            // The OAuth 2.0 client handler helps us manage access tokens
            $oAuth2Client = $facebook->getOAuth2Client();

            // Get the access token metadata from /debug_token
            $tokenMetadata = $oAuth2Client->debugToken($accessToken);
            echo '<h3>Metadata</h3>';
            var_dump($tokenMetadata);

            if (! $accessToken->isLongLived()) {
              // Exchanges a short-lived access token for a long-lived one
              try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
              } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                exit;
              }

              echo '<h3>Long-lived</h3>';
              var_dump($accessToken->getValue());
            }

            $_SESSION['fb_access_token'] = (string) $accessToken;

            */

        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $this->getView()->render($response, 'home.twig');
        return $response;
    }
}
