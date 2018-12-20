<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 16/12/18
 * Time: 12:51
 */

namespace Models;
use Core\Config;
use Models\API;


class Formation
{

    private $id;
    private $formation_libelle;
    private $date;

    //

    public function __construct($id, $formation_libelle, $date)
    {
        $this->id = $id;
        $this->formation_libelle = $formation_libelle;
        $this->date = $date;
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
    public function getFormationLibelle()
    {
        return $this->formation_libelle;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }





    /**
     * @return string
     */
    private static function getUrl()
    {
        return Config::API_URL . '/formation/';
    }





    /**
     * @return mixed|string
     */
    public static function getFormation()
    {
        return API::call(self::getUrl());
    }

    /**
     * @param $id
     * @return mixed|string
     */
    public static function getFormationId($id)
    {
        $url = self::getUrl() . $id;
        $response = API::call($url);

        $formation = array();
        foreach ($response->data as $one)
        {
            $formation[] = new Formation($one->id, $one->formation_libelle, $one->date);
        }
        return $formation;
    }

    /**
     * @param $date
     * @return mixed|string
     */
    public static function getFormationDate($date)
    {
        $url = self::getUrl() . '/date/' . $date;
        $response = API::call($url);

        $formation = array();
        foreach ($response->data as $one)
        {
            $formation[] = new Formation($one->id, $one->formation_libelle, $one->date);
        }
        return $formation;
    }

    /**
     * @param $employee_id
     * @return mixed|string
     */
    public static function getFormationEmployee($employee_id)
    {
        $url = self::getUrl() . '/employee/' . $employee_id;
        $response = API::call($url);

        if (isset($response))
        {
            $formation = array();
            foreach ($response->data as $one)
            {
                $formation[] = new Formation($one->id, $one->formation_libelle, $one->date);
            }
        }else{
            $formation = null;
        }
        return $formation;

    }

    /**
     * @param $employee_id
     * @param $date
     * @return mixed|string
     */
    public static function getFormationEmployeeDate($employee_id, $date)
    {
        $url = self::getUrl() . '/employee/' . $employee_id . '/' . $date;
        $response = API::call($url);

        $formation = array();
        foreach ($response->data as $one)
        {
            $formation[] = new Formation($one->id, $one->formation_libelle, $one->date);
        }
        return $formation;
    }





}