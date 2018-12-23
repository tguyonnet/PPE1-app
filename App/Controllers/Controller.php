<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 14:42
 */

namespace Controllers;

use Core\Config;
use Models\Employee;

class Controller
{
    /**
     * @var
     */
    protected $container;

    /**
     * Controller constructor.
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if ($this->container->{$property}){
            return $this->container->{$property};
        }
    }

    /**
     * Fonction pour rediriger les pages.
     * @param $response
     * @param $name
     * @return mixed
     */
    public function redirect($response, $name)
    {
        return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor($name));
    }

    /**
     * Fonction pour afficher un message en cas de connexion,
     * Ou si l'utilisateur n'est pas connecté.
     * @param $message
     * @param string $type
     * @return mixed
     */
    public function flush($message, $type='succes')
    {
        if(isset($_SESSION['flush'])){
            $_SESSION['flush'] = [];
        }
        return $_SESSION['flush'][$type]= $message;

    }

    /**
     * Fonction qui renvoi toutes les données qui s'affichent sur toutes les pages.
     * @param $title
     * @return array
     */
    public function display($title){
        $employee = Employee::getEmployee($_SESSION['id']);

        return ['title'=> $title, 'footer' => Config::APPLI_NAME .' '. Config::APPLI_VERSION, 'employee' => $employee];

    }

}