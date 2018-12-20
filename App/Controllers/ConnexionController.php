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
use Models\Employee;

class ConnexionController extends Controller
{
    public function getLogin($request, $response, $alerte=null){
        return $this->view->render($response, 'login.twig', ['title' => 'ConnexionController', 'alert' => $alerte]);
    }


    public function getLogout($request, $response){
        session_destroy();
        session_unset();
        return $this->view->render($response, 'login.twig');
    }



    public function postLogin($request, $response)
    {

        $email = $request->getParam('email');
        $password = $request->getParam('password');

        $url = Config::API_URL . '/employee/' . $email . '/' . $password;
        $result = API::call($url);

        $idEmployee = Employee::getEmployeeId($email, $password);



        if ($result->data!=null) {
            $_SESSION['id'] = $result->data;

            $employee = Employee::getEmployee($_SESSION['id']);
            $_SESSION['name'] = $employee[0]->getName();
            $_SESSION['firstname'] = $employee[0]->getFirstname();
            $_SESSION['email'] = $employee[0]->getEmail();


        }

        return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor('absence'));


//        return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor('login'));

        /*
                if(false){
                    $this->flush('Vous êtes connecté ! ');
                }else{
                    $this->flush('Vous n\'êtes pas connecté ! ');
                }
                return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor('dashboard'));
        */
    }


}