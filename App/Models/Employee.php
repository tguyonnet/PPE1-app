<?php

namespace Models;
use Core\Config;
use Models\API;


class Employee
{
    private $id;
    private $city;
    private $name;
    private $firstname;
    private $street_address;
    private $postal_code;
    private $birthdate;
    private $appli_pw;
    private $email;
    private $cellphone;

    /**
     * Employee constructor.
     * @param $id
     * @param $city
     * @param $name
     * @param $firstname
     * @param $street_address
     * @param $postal_code
     * @param $birthdate
     * @param $appli_pw
     * @param $email
     * @param $cellphone
     */
    public function __construct($id, $city, $name, $firstname, $street_address, $postal_code, $birthdate, $appli_pw, $email, $cellphone)
    {
        $this->id = $id;
        $this->city = $city;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->street_address = $street_address;
        $this->postal_code = $postal_code;
        $this->birthdate = $birthdate;
        $this->appli_pw = $appli_pw;
        $this->email = $email;
        $this->cellphone = $cellphone;
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->street_address;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @return mixed
     */
    public function getAppliPw()
    {
        return $this->appli_pw;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }




    /**
     * @return string
     */
    private static function getUrl()
    {
        return Config::API_URL . '/employee/';
    }




    /**
     * @param $id
     * @return mixed|string
     */
    public static function getEmployee($id)
    {
        $url = self::getUrl() . $id;
        $response = API::call($url);

        $employee = array();
        foreach ($response->data as $one)
        {
            $employee[] = new Employee($one->id, $one->city, $one->name, $one->firstname, $one->street_address, $one->postal_code, $one->birthdate, $one->appli_pw, $one->email, $one->cellphone);
        }
        return $employee;
    }

    /**
     * @param $email
     * @param $password
     * @return mixed|string
     */
    public static function getEmployeeId($email, $password)
    {
        $url = self::getUrl() . $email . '/' . $password;
        $response = API::call($url);

        $employee = array();
        foreach ($response->data as $one)
        {
            $employee[] = new Employee($one->id, $one->city, $one->name, $one->firstname, $one->street_address, $one->postal_code, $one->birthdate, $one->appli_pw, $one->email, $one->cellphone);
        }
        return $employee;

    }




}