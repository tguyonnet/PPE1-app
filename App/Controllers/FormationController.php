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
        return $this->view->render($response, 'formation.twig', ['page' => self::display('Formation'), 'formations' => $formations]);
    }

    /**
     * Affiche la vue form_formation.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function addFormation($request, $response)
    {
        return $this->view->render($response, 'form_formation.twig', ['page' => self::display('Formation')]);
    }

}

