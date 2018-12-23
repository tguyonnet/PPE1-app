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
    /**
     * Affiche la vue login.twig
     * @param $request
     * @param $response
     * @param null $alerte
     * @return mixed
     */
    public function getLogin($request, $response, $alerte=null){
        return $this->view->render($response, 'login.twig', ['title' => 'Connexion']);
    }

    /**
     * Affiche la vue login.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function getLogout($request, $response){
        session_destroy();
        session_unset();
        return $this->view->render($response, 'login.twig',['title' => 'Connexion']);
    }


    /**
     * Si les identifiants sont bons, l'utilisateur est renvoyé vers la vue dashboard.twig
     * sinon la vue login.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function postLogin($request, $response)
    {

        $email = $request->getParam('email');
        $password = $request->getParam('password');

        $result = Employee::getEmployeeId($email, $password);

        if ($result->data!=null) {
            $_SESSION['id'] = $result->data;

            $employee = Employee::getEmployee($_SESSION['id']);
            $_SESSION['name'] = $employee[0]->getName();
            $_SESSION['firstname'] = $employee[0]->getFirstname();
            $_SESSION['email'] = $employee[0]->getEmail();

        }

        return $this->redirect($response, 'dashboard');

    }


}