<?php

namespace Models;

class connexion
{
    /**
     * @return string
     */
    private function getUrl()
    {
        return \Config\Config::API_URL . '/employee/';
    }

    /**
     * @param $id
     * @return mixed|string
     */
    public function getEmployee($id)
    {
        $url = self::getUrl() . $id;
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
        $url = self::getUrl() . $email . '/' . $password;
        $response = API::__call($url);
        return $response;

    }




}