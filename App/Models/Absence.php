<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 16/12/18
 * Time: 12:51
 */

namespace Models;
use Core\Config;

class Absence
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var date
     */
    private $start_date;

    /**
     * @var date
     */
    private $end_date;

    /**
     * @var string
     */
    private $absence_pattern;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $employee_id;

    /**
     * Absence constructor.
     * @param $id
     * @param $start_date
     * @param $end_date
     * @param $absence_pattern
     * @param $type
     * @param $employee_id
     */
    public function __construct($id, $start_date, $end_date, $absence_pattern, $type, $employee_id)
    {
        $this->id = $id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->absence_pattern = $absence_pattern;
        $this->type = $type;
        $this->employee_id = $employee_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @return mixed
     */
    public function getAbsencePattern()
    {
        return $this->absence_pattern;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }





    /**
     * @return string
     */
    private static function getUrl()
    {
        return Config::API_URL . '/absence';
    }





    /**
     * Renvoi tous les employées en fonction d'un employee.id.
     * @param $employeeId
     * @return array
     */
    public static function getAllByEmployeeId($employeeId)
    {
        $url = self::getUrl() . '/employee/' . $employeeId;
        $response = API::call($url);

        $absences = array();
        foreach ($response->data as $one)
        {
            $absences[] = new Absence($one->id, $one->start_date, $one->end_date, $one->absence_pattern, $one->type, $one->employee_id);
        }
        return $absences;
    }

    /**
     * Renvoi les détails d'une absence en fonction de son id
     * @param $employeeId
     * @return array
     */
    public static function getAbsenceId($id)
    {
        $url = self::getUrl() . '/' . $id;
        $response = API::call($url);

        $absences = array();
        foreach ($response as $one)
        {
            $absences[] = new Absence($one->id, $one->start_date, $one->end_date, $one->absence_pattern, $one->type, $one->employee_id);
        }
        return $absences;
    }



    /**
     * Renvoi une absence en fonction d'une date.
     * @param $date
     * @return mixed|string
     */
    public static function getAbsenceDate($date)
    {
        $url = self::getUrl() . '/date/' . $date;
        $response = API::call($url);

        $absences = array();
        foreach ($response->data as $one)
        {
            $absences[] = new Absence($one->id, $one->start_date, $one->end_date, $one->absence_pattern, $one->type, $one->employee_id);
        }
        return $absences;
    }

    /**
     * @param $employee_id
     * @param $date
     * @return mixed|string
     */
    public static function getAbsenceEmployee_idDate($employee_id, $date)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/date/' . $date;
        $response = API::call($url);

        $absences = array();
        foreach ($response->data as $one)
        {
            $absences[] = new Absence($one->id, $one->start_date, $one->end_date, $one->absence_pattern, $one->type, $one->employee_id);
        }
        return $absences;
    }

    /**
     * @param $employee_id
     * @param $type///formation/delete/{employee_id}/{formation_id}
     * @return mixed|string
     */
    public static function getAbsenceEmployee_idType($employee_id, $type)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/type/' . $type;
        $response = API::call($url);

        $absences = array();
        foreach ($response->data as $one)
        {
            $absences[] = new Absence($one->id, $one->start_date, $one->end_date, $one->absence_pattern, $one->type, $one->employee_id);
        }
        return $absences;
    }

    /**
     * @param $employee_id
     * @param $type
     * @param $date
     * @return mixed|string
     */
    public static function getAbsenceEmployee_idTypeDate($employee_id, $type, $date)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/type/' . $type . '/date/' . $date;
        $response = API::call($url);

        $absences = array();
        foreach ($response->data as $one)
        {
            $absences[] = new Absence($one->id, $one->start_date, $one->end_date, $one->absence_pattern, $one->type, $one->employee_id);
        }
        return $absences;
    }


    /**
     * @param $id
     * @param $start_date
     * @param $end_date
     * @param $absence_pattern
     * @param $type
     * @param $employee_id
     * @return mixed|string
     */
    public static function updateAbsence($id, $start_date, $end_date, $absence_pattern, $type, $employee_id)
    {
        $url = self::getUrl() . '/update/'.$id.'/'.$start_date.'/'.$end_date.'/'.$absence_pattern.'/'.$type.'/'.$employee_id;
        return API::call($url);
    }


    /**
     * @param $id
     * @return mixed|string
     */
    public static function deleteAbsence($id)
    {
        $url = self::getUrl() . '/delete/'.$id;
        return API::call($url);
    }

    /**
     * Ajouter une absence
     * @param $start_date
     * @param $end_date
     * @param $absence_pattern
     * @param $type
     * @param $employee_id
     * @return mixed|string
     */
    public static function addAbsence($start_date, $end_date, $absence_pattern, $type, $employee_id)
    {
        $url = self::getUrl() . '/add/'.$start_date.'/'.$end_date.'/'.$absence_pattern.'/'.$type.'/'.$employee_id;
        var_dump($url);
        return API::call($url);
    }





}