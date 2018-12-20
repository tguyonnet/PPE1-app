<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Core\Config;
use Models\Absence;
use Models\Employee;

class AbsenceController extends Controller
{
    public function index($request, $response)
    {
        $absences = Absence::getAllByEmployeeId($_SESSION['id']);
        $employee = Employee::getEmployee($_SESSION['id']);

        $page = ['title'=>'Absence', 'footer'=> Config::APPLI_NAME .' '. Config::APPLI_VERSION];

        return $this->view->render($response, 'absence.twig',['page' => $page, 'absences' => $absences,  'employee' => $employee]);
    }

}

