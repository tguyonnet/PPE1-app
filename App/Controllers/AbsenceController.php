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
use Models\API;
use Models\Employee;

class AbsenceController extends Controller
{
    /**
     * Afficer la vue absence.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        $absences = Absence::getAllByEmployeeId($_SESSION['id']);
        return $this->view->render($response, 'absence.twig',['page' => self::display('Absence'), 'absences' => $absences]);
    }

}

