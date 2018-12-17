<?php

namespace Models;

class formation
{
    /**
     * @return string
     */
    private function getUrl()
    {
        return \Config\Config::API_URL . '/formation/';
    }

    /**
     * @return mixed|string
     */
    public function getFormation()
    {
        return API::__call(self::getUrl());
    }

    /**
     * @param $id
     * @return mixed|string
     */
    public function getFormationId($id)
    {
        $url = self::getUrl() . $id;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $date
     * @return mixed|string
     */
    public function getFormationDate($date)
    {
        $url = self::getUrl() . '/date/' . $date;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $employee_id
     * @return mixed|string
     */
    public function getFormationEmployee($employee_id)
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
    public function getFormationEmployeeDate($employee_id, $date)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/' . $date;
        $response = API::__call($url);
        return $response;
    }





}