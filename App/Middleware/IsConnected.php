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
        /**
         * si la session est valide ca renvoi vers la route demandée.
         * sinon login.
         */
        if(!isset($_SESSION['id']) ) {

            if( $_SERVER['REQUEST_URI'] != '/Connexion' ){
                return $response->withStatus(200)->withHeader('Location', 'Connexion');
            }
        }
        return $next($request, $response);

    }






}