<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 16/12/18
 * Time: 12:51
 */

namespace Models;


class Absence
{
    /**
     * @return string
     */
    private static function getUrl()
    {
        return \Config\Config::API_URL . '/absence/';
    }

    /**
     * @param $date
     * @return mixed|string
     */
    public static function getAbsenceDate($date)
    {
        $url = self::getUrl() . '/date/' . $date;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $employee_id
     * @return mixed|string
     */
    public static function getAbsenceEmployee_id($employee_id)
    {
        $url = self::getUrl() . '/employee/' . $employee_id;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $employee_id
     * @param $date
     * @return mixed|string
     */
    public static function getAbsenceEmployee_idDate($employee_id, $date)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/date/' . $date;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $employee_id
     * @param $type
     * @return mixed|string
     */
    public static function getAbsenceEmployee_idType($employee_id, $type)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/type/' . $type;
        $response = API::__call($url);
        return $response;
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
        $response = API::__call($url);
        return $response;
    }




}