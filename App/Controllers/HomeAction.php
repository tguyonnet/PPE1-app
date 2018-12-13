<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace App\Controllers;


use Psr\Container\ContainerInterface;

class HomeAction
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

    public function __invoke($request, $response, $args) {
        // your code
        // to access items in the container... $this->container->get('');

        $response->write("Hello World");

        return $response;
    }
}

