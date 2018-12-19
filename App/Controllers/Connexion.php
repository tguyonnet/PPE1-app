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
    public function getLogin($request, $response){
        return $this->view->render($response, 'login.twig', ['title' => 'Connexion']);
    }


    public function postLogin($request, $response)
    {
        /*
        $email = $request->getParam('email');
        $password = $request->getParam('password');

        $url = Config::API_URL . '/employee/' . $email . '/' . $password;
        $result = API::call($url);

        if ($result->data!=null) {
            $_SESSION['id'] = $result->data;
            $this->flush('Vous êtes connecté ! ');

            return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor('login'));

        }else{
            $this->flush('Veuillez vous connecter !');

            $this->redirect($response, 'login');
        }
        */

        if(false){
            $this->flush('Vous êtes connecté ! ');


        }else{
            $this->flush('Vous n\'êtes pas connecté ! ');

        }

        return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor('login'));


    }


}