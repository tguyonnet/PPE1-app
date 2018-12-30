<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 30/12/18
 * Time: 12:34
 */

namespace Models;


class Bounty
{

    private $id;
    private $amount;
    private $date;
    private $salary_id;

    /**
     * bounty constructor.
     * @param $id
     * @param $amount
     * @param $date
     * @param $salary_id
     */
    public function __construct($id, $amount, $date, $salary_id)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->date = $date;
        $this->salary_id = $salary_id;
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
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getSalaryId()
    {
        return $this->salary_id;
    }





}