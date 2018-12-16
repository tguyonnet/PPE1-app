<?php

class formation {

    private $id;
    private $libelle;
    private $date;


    /**
     * formation constructor.
     * @param $id
     * @param $libelle
     * @param $date
     */
    public function __construct($id, $libelle, $date)
    {
        $this->id = $id;
        $this->libelle = $libelle;
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
    public function getDate()
    {
        return $this->date;
    }


    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    public function api()
    {
        $url = 'http://api.test/formation';
        //  Initiate curl
        $ch = curl_init();
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $url);
        //  Execute
        $response = curl_exec($ch);
        // Closing
        curl_close($ch);
        $result = json_decode($response);
        return $result;
    }
}