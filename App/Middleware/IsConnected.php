<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:53
 */

namespace Middleware;


class IsConnected
{
    public function __invoke($response, $request, $next)
    {
        $route = ['Connexion'];
        if(!isset($_SESSION['id']) ){
            $response->getBody()->write('connexion');
        }else{
            $response = $next($request, $response);
        }
        return $response;
    }






}