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

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * IsConnected constructor.
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request, Response $response, $next)
    {

//        if(!isset($_SESSION['id']) ){
//            return $response->withStatus(200)->withHeader('Location', 'login');
//        }

        $this->twig->addGlobal('flush', isset($_SESSION['flush']) ? $_SESSION['flush'] : [] );
        if (isset($_SESSION['flush'])){
            unset($_SESSION['flush']);
        }

        return $next($request, $response);

    }






}