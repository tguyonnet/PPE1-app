<?php

namespace Models;
use Core\Config;

class Career
{
    //Post
    private $id;
    private $post_libelle;
    private $mission;
    private $career_id;


    /**
     * Career constructor.
     * @param $id
     * @param $post_libelle
     * @param $mission
     * @param $career_id
     */
    public function __construct($id, $post_libelle, $mission, $career_id)
    {
        $this->id = $id;
        $this->post_libelle  = $post_libelle;
        $this->mission = $mission;
        $this->career_id = $career_id;
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
    public function getCareerId()
    {
        return $this->career_id;
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

        $posts = array();
        foreach ($response as $one)
        {
            $posts[] = new Career($one->id, $one->post_libelle, $one->mission, $one->career_id);
        }
        //var_dump($posts);
        return $posts;
    }









}