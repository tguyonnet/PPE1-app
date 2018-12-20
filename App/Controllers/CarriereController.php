<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;


use Core\Config;

class CarriereController extends Controller
{
    public function index($request, $response)
    {

        $page = ['title'=>'Carriere', 'footer'=> Config::APPLI_NAME .' '. Config::APPLI_VERSION];

        return $this->view->render($response, 'carriere.twig',['page' => $page]);
    }

}

