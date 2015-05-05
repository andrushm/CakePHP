<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 02.05.2015
 * Time: 22:38
 */
session_start();

App::import("Vendor", "Facebook", array("file" => "facebook-php-sdk-v4-4.0-dev/autoload.php"));
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookJavaScriptLoginHelper;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookCanvasLoginHelper;
use Facebook\GraphUser;

FacebookSession::setDefaultApplication('773271782779972','50adb74b6e03c1ff18a95f26c45fb4cd');

class UsersController extends AppController {

    public $helpers = array('Html');

    public function login($social = null)
    {

        $redirect_url_fb = Router::url(array('controller' => 'users', 'action' => 'login', 'fb'), true);

        if (empty($social)) {

            $helper = new FacebookRedirectLoginHelper($redirect_url_fb, $appId = NULL, $appSecret = NULL);
            $fb_url = $helper->getLoginUrl(array('public_profile','email'));
            $this->set('fb_url', $fb_url);
        } else {
            if ($social == 'fb') {
                $user_profile = $this->getUserFBProfile($redirect_url_fb);
                if (isset($user_profile['id'])) {

                    $res = $this->User->saveProfile($user_profile);
                    $this->redirect(array('controller' => 'users', 'action' => 'profile', $user_profile['id']));

                }
            }

        }
    }

    public function profile($id){
        $user_profile = $this->User->getUserProfile($id);
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
        }
        $this->set('user_profile', $user_profile);
    }

    protected function getUserFBProfile($redirect_url){
        $gender = array('male' => 1, 'female' => 2);
        $helper = new FacebookRedirectLoginHelper($redirect_url);
        try {
            $session = $helper->getSessionFromRedirect();
        } catch (FacebookRequestException $ex) {
            echo $ex->getMessage();
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }

        if (isset($session)) {
            try {
                $request1 = new FacebookRequest($session, 'GET', '/me?fields=id,first_name,last_name,email,gender,location,picture.width(200)');
                $response1 = $request1->execute();
                $result = $response1->getGraphObject()->asArray();
                $result['picture'] = $result['picture']->data->url;
                $result['gender_id'] = $gender[$result['gender']];
                return $result;
            } catch(FacebookRequestException $e) {
                return $e->getMessage();
            }
        };
        return false;
    }

} 