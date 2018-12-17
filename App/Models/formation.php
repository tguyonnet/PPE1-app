<?php

namespace Models;

class formation
{
    private $url = \Config\Config::API_URL . '/formation/';

    /**
     * @return mixed|string
     */
    public function getFormation()
    {
        return API::__call($this->url);
    }

    /**
     * @param $id
     * @return mixed|string
     */
    public function getFormationId($id)
    {
        $url = $this->url . $id;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $date
     * @return mixed|string
     */
    public function getFormationDate($date)
    {
        $url = $this->url . '/date/' . $date;
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $employee_id
     * @return mixed|string
     */
    public function getFormationEmployee($employee_id)
    {
        $url = $this->url . '/employee/' . $employee_id;
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
        $url = $this->url . '/employee/' . $employee_id . '/' . $date;
        $response = API::__call($url);
        return $response;
    }





}