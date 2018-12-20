<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Core\Config;
use Models\Formation;

class FormationController extends Controller
{
    public function index($request, $response)
    {
        $formations =  Formation::getFormationEmployee($_SESSION['id']);

        $page = ['title'=>'Formation', 'footer'=> Config::APPLI_NAME .' '. Config::APPLI_VERSION];


        return $this->view->render($response, 'formation.twig',['page' => $page, 'formations' => $formations]);
    }

}

