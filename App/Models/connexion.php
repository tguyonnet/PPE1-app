<?php

namespace Models;

class connexion
{
    private $url = \Config\Config::API_URL . '/employee/';

    /**
     * @param $id
     * @return mixed|string
     */
    public function getEmployee($id)
    {
        $url = $this->url . $id;
        $response = API::__call($url);
        return $response;

    }

    /**
     * @param $email
     * @param $password
     * @return mixed|string
     */
    public function getEmployeeId($email, $password)
    {
        $url = $this->url . $email . '/' . $password;
        $response = API::__call($url);
        return $response;

    }




}