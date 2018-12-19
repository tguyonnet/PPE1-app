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
    public function index($request, $response)
    {
        return $this->view->render($response, 'carriere.twig',['title' => 'Carriere']);
    }

}

