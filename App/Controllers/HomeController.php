<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;


class HomeController extends Controller
{
    public function index($request, $response){
        return $this->view->render($response, 'connexion.php',['title' => 'Home']);

    }

    private $id;
    private $libelle;
    private $date;



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

