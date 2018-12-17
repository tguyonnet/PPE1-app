<?php

namespace Models;
require 'API.php';


class Career
{
    //Post
    private $id;
    private $post_libelle;
    private $mission;
    private $carrer_id;

    //Salary
    private $amount;
    private $post_id;
    private $employee_id;

    //Bounty
    private $amount;
    private $date;
    private $salary_id;

    //Hiring Date
    private $hiring_date;
    private $employee_id;

    //Other
    private $terminaison_date;
    private $retirement_date;
    private $departure_date;
    private $enterexit_id;



    /**
     * @return string
     */
    private function getUrl()
    {
        return \Config\Config::API_URL . '/career/';
    }

    /**
     * @param $employee
     * @return mixed|string
     */
    public function getCareerEmployeePost($employee)
    {
        $url = self::getUrl() . $employee . '/post';
        $response = API::call($url);
        return $response;
    }


    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostSalary($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/salary';
        $response = API::call($url);
        return $response;
    }

    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostBounty($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/bounty';
        $response = API::call($url);
        return $response;
    }

    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostHiringDate($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/hiringDate';
        $response = API::call($url);
        return $response;
    }

    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostTermination($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/termination';
        $response = API::call($url);
        return $response;
    }

    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostRetirement($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/retirement';
        $response = API::call($url);
        return $response;
    }

    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostResignation($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/resignation';
        $response = API::call($url);
        return $response;
    }









}