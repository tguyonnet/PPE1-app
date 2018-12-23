<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

class CarriereController extends Controller
{
    /**
     * Afficher la vue carriere.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'carriere.twig',['page' => self::display('Carriere')]);
    }

}

