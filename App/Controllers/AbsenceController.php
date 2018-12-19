<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Models\Absence;
use Models\Employee;

class AbsenceController extends Controller
{
    public function index($request, $response)
    {
        $absences =  Absence::getAllByEmployeeId($_SESSION['id']);
//        $employee = Employee::getEmployee($absences[0]->getEmployeeId());


        return $this->view->render($response, 'absence.twig',['title' => 'Absence', 'absences' => $absences]);
    }

}

