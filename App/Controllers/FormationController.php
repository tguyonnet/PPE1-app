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
        $formations = Formation::getFormationDate(date('Y-m-d'));
        return $this->view->render($response, 'form_formation.twig', ['page' => self::display('Formation'), 'formations' => $formations]);
    }

    /**
     * Affiche la vue form_formation.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function addFormation_traitement($request, $response)
    {

        if ($request->getParam('ajouter') != '' && $request->getParam('formation_id') != '' )
        {
            Formation::addFormation($_SESSION['id'], $request->getParam('formation_id'));
            $msg_err  = 'Inscription réussite !';
        }
        else
            $msg_err  = 'Il y a eu une erreur lors de votre inscription';

        $formations =  Formation::getFormationEmployee($_SESSION['id']);
        return $this->view->render($response, 'formation.twig', ['page' => self::display('Formation', '../', $msg_err), 'formations' => $formations]);
    }


    /**
     * Supprime une formation
     * @param $request
     * @param $response
     * @return mixed
     */
    public function deleteFormation($request, $response, $args)
    {
//        var_dump($args['formation_id']);
        if (isset($args['formation_id']) && $args['formation_id'] !='')
        {
            Formation::deleteFormation($_SESSION['id'], $args['formation_id']);
            $msg_err  = 'Formation supprimée !';
        }
        else
            $msg_err  = 'Il y a eu une erreur lors de la suppresion de votre formation';

        $formations =  Formation::getFormationEmployee($_SESSION['id']);


        return $this->view->render($response, 'formation.twig', ['page' => self::display('Formation', '../../', $msg_err), 'formations' => $formations]);
    }

}

