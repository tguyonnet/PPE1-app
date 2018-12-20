<?php

namespace Models;
use Core\Config;
use Models\API;

class Career
{
    //Post
    private $id;
    private $post_libelle;
    private $mission;
    private $carrer_id;

    //Salary
    private $salaryAmount;

    //Bounty
    private $bountyAmount;
    private $date;

    //Hiring Date
    private $hiring_date;

    //Other
    private $terminaison_date;
    private $retirement_date;
    private $departure_date;



    //modifier la route pour tout afficher en une seule route.

    /**
     * Career constructor.
     * @param $id
     * @param $post_libelle
     * @param $mission
     * @param $carrer_id
     * @param $salaryAmount
     * @param $hiring_date
     * @param null $bountyAmount
     * @param null $date
     * @param null $terminaison_date
     * @param null $retirement_date
     * @param null $departure_date
     */
    public function __construct($id, $post_libelle, $mission, $carrer_id, $salaryAmount, $hiring_date, $bountyAmount=null, $date=null, $terminaison_date=null, $retirement_date=null, $departure_date=null)
    {
        $this->id = $id;
        $this->post_libelle  = $post_libelle;
        $this->mission = $mission;
        $this->carrer_id = $carrer_id;
        $this->salaryAmount = $salaryAmount;
        $this->hiring_date = $hiring_date;
        $this->bountyAmount = $bountyAmount;
        $this->date = $date;
        $this->terminaison_date = $terminaison_date;
        $this->retirement_date = $retirement_date;
        $this->departure_date = $departure_date;
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
    public function getPostLibelle()
    {
        return $this->post_libelle;
    }

    /**
     * @return mixed
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @return mixed
     */
    public function getCarrerId()
    {
        return $this->carrer_id;
    }

    /**
     * @return mixed
     */
    public function getSalaryAmount()
    {
        return $this->salaryAmount;
    }

    /**
     * @return null
     */
    public function getBountyAmount()
    {
        return $this->bountyAmount;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getHiringDate()
    {
        return $this->hiring_date;
    }

    /**
     * @return null
     */
    public function getTerminaisonDate()
    {
        return $this->terminaison_date;
    }

    /**
     * @return null
     */
    public function getRetirementDate()
    {
        return $this->retirement_date;
    }

    /**
     * @return null
     */
    public function getDepartureDate()
    {
        return $this->departure_date;
    }





    /**
     * @return string
     */
    private static function getUrl()
    {
        return Config::API_URL . '/career/';
    }





    /**
     * @param $employee
     * @return mixed|string
     */
    public static function getCareerEmployeePost($employee)
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
    public static function getCareerEmployeePostSalary($employee, $post)
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
    public static function getCareerEmployeePostBounty($employee, $post)
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
    public static function getCareerEmployeePostHiringDate($employee, $post)
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
    public static function getCareerEmployeePostTermination($employee, $post)
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
    public static function getCareerEmployeePostRetirement($employee, $post)
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
    public static function getCareerEmployeePostResignation($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/resignation';
        $response = API::call($url);
        return $response;
    }









}