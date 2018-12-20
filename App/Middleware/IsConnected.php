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
//        if(!isset($_SESSION['id'])  ) {
//
////            if($request->getUri() != 'http://app.test/Login'){
//            if($request->getUri()->getPath() == 'Login'){
//                return $response->withStatus(200)->withHeader('Location', 'Login');
//            }
//
//        }


        return $next($request, $response);

    }






}