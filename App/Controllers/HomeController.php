<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;


use Slim\Views\Twig as View;

class HomeController extends Controller
{

    public function index($request, $response){
        return $this->view->render($response, 'home.twig');
    }

}

