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

    /**
     * Affiche la vue edit_formation.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function editFormation($request, $response, $args)
    {
        var_dump($args['id']);
        return $this->view->render($response, 'edit_formation.twig', ['page' => self::display('Formation', '../../')]);
    }

    /**
     * Affiche la vue delete_formation.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function deleteFormation($request, $response, $args)
    {
//        var_dump($args['id']);
        return $this->view->render($response, 'delete_formation.twig', ['page' => self::display('Formation', '../../')]);
    }

}

