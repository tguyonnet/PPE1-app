<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:53
 */

namespace Middleware;

use Slim\Http\Response;
use Slim\Http\Request;

class IsConnected
{
    public function __invoke(Request $request, Response $response, $next)
    {
        $route = ['Connexion'];
        if(!isset($_SESSION['id']) ){
            return $response->withStatus(200)->withHeader('Location', 'login');
        }else{
            $response = $next($request, $response);
        }
        return $response;
    }






}