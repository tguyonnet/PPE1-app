<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 14:42
 */

namespace Controllers;

class Controller
{
    protected $container;

    public function __construct($container) {
        $this->container = $container;
    }


    public function __get($property){
        if ($this->container->{$property}){
            return $this->container->{$property};
        }
    }

    public function redirect($response, $name)
    {
        return $response->withStatus(302)->withHeader('Location', $this->router->pathFor($name));
    }


}