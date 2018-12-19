<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 10:39
 */

namespace Controllers;
use Core\Config;
use Models\API;

class Connexion extends Controller
{
    public function getLogin($request, $response)
    {
        return $this->view->render($response, 'login.twig', ['title' => 'Connexion']);
    }

    public function postLogin($request, $response)
    {
        $email = $request->getParam('email');
        $password = $request->getParam('password');

        $url = Config::API_URL . '/employee/' . $email . '/' . $password;
        $result = API::call($url);

        if ($result->data!=null) {
            $_SESSION['id'] = $result->data;
            $this->redirect($response, 'home');

        }

    }


}