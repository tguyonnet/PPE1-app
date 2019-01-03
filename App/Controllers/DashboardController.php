<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:18
 */

namespace Controllers;
use Models\Absence;
use Models\Career;
use Models\Formation;

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
        $absences = Absence::getAllByEmployeeId($_SESSION['id']);
        $posts =  Career::getCareerEmployeePost($_SESSION['id']);
        $formations =  Formation::getFormationEmployee($_SESSION['id']);

        $count = ['absences'=>count($absences), 'postes'=>count($posts), 'formations'=>count($formations)];

        return $this->view->render($response, 'dashboard.twig',['page' => self::display('Dashboard'), 'count'=>$count]);
    }

}