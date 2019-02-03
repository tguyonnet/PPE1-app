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
     * Afficer la vue add_absence.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function addAbsence($request, $response)
    {
        return $this->view->render($response, 'add_absence.twig',['page' => self::display('Absence')]);
    }

    /**
     * traitement d'un ajout d'absence
     * @param $request
     * @param $response
     * @return mixed
     */
    public function addAbsenceTraitement($request, $response)
    {
        $validate = $request->getParam('modifier');
        $start_date = $request->getParam('start_date');
        $end_date = $request->getParam('end_date');
        $pattern = $request->getParam('pattern');
        $type = $request->getParam('type');
        $employee_id = $_SESSION['id'];

        $date1 = date_create($start_date);
        $date2 = date_create($end_date);


        if (date_format($date1, 'Y-m-d H:i:s') &&  date_format($date2, 'Y-m-d H:i:s') && isset($validate) )
        {
            Absence::addAbsence($start_date, $end_date, $pattern, $type, $employee_id);
            $msg_err  = 'L\'ajout a été éffectuée.';

        }else
            $msg_err  = 'Vous ne remplissez pas les champs correctement.';

        $absences = Absence::getAllByEmployeeId($_SESSION['id']);
        return $this->view->render($response, 'absence.twig',['page' => self::display('Absence', '../', $msg_err), 'absences' => $absences]);
    }


    /**
     * Affiche la vue edit_absence.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function editAbsence($request, $response, $args)
    {
        $absence = Absence::getAbsenceId($args['absence_id']);

        return $this->view->render($response, 'edit_absence.twig', ['page' => self::display('Absence', '../'), 'absence' => $absence]);
    }

    /**
     * Affiche la vue edit_absence.twig en fonction du traitement du formulaire.
     * @param $request
     * @param $response
     * @return mixed
     */
    public function editAbsenceTraitement($request, $response, $args)
    {
        $validate = $request->getParam('modifier');
        $id = $request->getParam('id');
        $start_date = $request->getParam('start_date');
        $end_date = $request->getParam('end_date');
        $pattern = $request->getParam('pattern');
        $type = $request->getParam('type');
        $employee_id = $_SESSION['id'];

        $date1 = date_create($start_date);
        $date2 = date_create($end_date);


        if (date_format($date1, 'Y-m-d H:i:s') &&  date_format($date2, 'Y-m-d H:i:s') && isset($validate) )
        {
            Absence::updateAbsence($id, $start_date, $end_date, $pattern, $type, $employee_id);
            $msg_err  = 'La modification a été éffectuée.';

        }else
            $msg_err  = 'Vous ne remplissez pas les champs correctement.';

        $absence = Absence::getAbsenceId($id);
        return $this->view->render($response, 'edit_absence.twig', ['page' => self::display('Absence', '../', $msg_err ), 'absence' => $absence]);
    }

    /**
     * Supprime une absence
     * @param $request
     * @param $response
     * @return mixed
     */
    public function deleteAbsenceTraitement($request, $response, $args)
    {
        if ($args['absence_id'] !='')
        {
            Absence::deleteAbsence($args['absence_id']);
            $msg_err  = 'Absence supprimée !';
        }
        else
            $msg_err  = 'Il y a eu une erreur lors de la suppresion de votre absence';


        $absences = Absence::getAllByEmployeeId($_SESSION['id']);
        return $this->view->render($response, 'absence.twig',['page' => self::display('Absence', '../', $msg_err), 'absences' => $absences]);
    }




}

