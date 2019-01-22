<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Models\Employee;

class ParametreController extends Controller
{
    /**
     * Afficer la vue parametre.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        $employee = Employee::getEmployee($_SESSION['id']);
        return $this->view->render($response, 'parametre.twig',['page' => self::display('Paramètres'), 'employee'=>$employee]);
    }


}

