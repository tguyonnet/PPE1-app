<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 10:39
 */

namespace Controllers;


class Connexion extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'connexion.php', ['title' => 'Connexion']);
    }


}