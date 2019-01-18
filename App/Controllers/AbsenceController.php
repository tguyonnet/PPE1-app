<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Models\Absence;

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

    /**
     * Afficer la vue form_absence.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function addAbsence($request, $response)
    {
        return $this->view->render($response, 'form_absence.twig',['page' => self::display('Absence')]);
    }

}

