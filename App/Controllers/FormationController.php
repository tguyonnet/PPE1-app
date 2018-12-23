<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Models\Formation;

class FormationController extends Controller
{
    /**
     * Affiche la vue formation.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        $formations =  Formation::getFormationEmployee($_SESSION['id']);
        return $this->view->render($response, 'formation.twig', ['page' => self::display('Absence'), 'formations' => $formations]);
    }

}

