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
    /**
     * Affiche la vue dashboard.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard.twig',['page' => self::display('Dashboard')]);
    }

}