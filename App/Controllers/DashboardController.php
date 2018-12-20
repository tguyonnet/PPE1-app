<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:18
 */

namespace Controllers;


use Core\Config;

class DashboardController extends Controller
{
    public function index($request, $response){

        $page = ['title'=>'Dashboard', 'footer'=> Config::APPLI_NAME .' '. Config::APPLI_VERSION];


        return $this->view->render($response, 'dashboard.twig',['page' => $page]);
    }

}