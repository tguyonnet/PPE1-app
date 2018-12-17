<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:53
 */

class isConnected
{
    public function __invoke($response, $request, $next)
    {
        $route = '';
        if(!isset($_SESSION['id']) && $route!='employee'){
            return $response->write('connexionPage.php');
        }else{
            return $next($response, $request);
        }
    }
}