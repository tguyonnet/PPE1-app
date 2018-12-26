<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 26/12/18
 * Time: 17:26
 */

namespace Models;


use Core\Config;

class Post
{

    private $post_libelle;
    private $mission;
    private $salary;
    private $hiring_date;

    private $bounty;

    private $termination;
    private $retirement;
    private $departure;


    /**
     * Post constructor.
     * @param $post_libelle
     * @param $mission
     * @param $salary
     * @param $hiring_date
     * @param null $bounty
     * @param null $terminaison
     * @param null $retirement
     * @param null $departure
     */
    public function __construct($post_libelle, $mission, $salary, $hiring_date, $bounty=null, $termination=null, $retirement=null, $departure=null)
    {
        $this->post_libelle = $post_libelle;
        $this->mission = $mission;
        $this->salary = $salary;
        $this->hiring_date = $hiring_date;
        $this->bounty = $bounty;
        $this->termination = $termination;
        $this->retirement = $retirement;
        $this->departure = $departure;
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
    public function getSalary()
    {
        return $this->salary;
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
    public function getBounty()
    {
        return $this->bounty;
    }

    /**
     * @return null
     */
    public function getTermination()
    {
        return $this->termination;
    }

    /**
     * @return null
     */
    public function getRetirement()
    {
        return $this->retirement;
    }

    /**
     * @return null
     */
    public function getDeparture()
    {
        return $this->departure;
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
    public static function getCareerEmployeePostDetails($employee, $post)
    {
        $url = self::getUrl() . $employee . '/post/' . $post;
        $response = API::call($url);

        $details = array();
        foreach ($response->data as $one)
        {
            $details[] = new Post($one->post_libelle, $one->mission, $one->salary, $one->hiring_date, $one->bounty, $one->termination, $one->retirnement, $one->departure);
        }
        return $details;
    }



}