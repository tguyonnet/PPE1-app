<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:18
 */

namespace Controllers;


class DashboardController extends Controller
{
    public function index($request, $response){
        return $this->view->render($response, 'dashboard.twig',['title' => 'Dashboard']);
    }

}