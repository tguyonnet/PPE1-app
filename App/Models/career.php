<?php

namespace Models;

class career
{
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
        $response = API::__call($url);
        return $response;
    }

    /**
     * @param $employee
     * @param $post
     * @return mixed|string
     */
    public function getCareerEmployeePostMission($employee, $post)
    {
        $url = self::getUrl() . $employee . $post . '/mission';
        $response = API::__call($url);
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
        $response = API::__call($url);
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
        $response = API::__call($url);
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
        $response = API::__call($url);
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
        $response = API::__call($url);
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
        $response = API::__call($url);
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
        $response = API::__call($url);
        return $response;
    }









}