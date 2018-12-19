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

class IsConnected{


    public function __invoke(Request $request, Response $response, $next)
    {

//        if(!isset($_SESSION['id']) ){
//            return $response->withStatus(200)->withHeader('Location', 'login');
//        }


        return $next($request, $response);

    }






}