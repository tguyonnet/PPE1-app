<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 10/12/18
 * Time: 16:33
 */

namespace Controllers;

use function Composer\Autoload\includeFile;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class Abscence
{
    public static function _defaultAction($request, $response, $args) {
        $titreOnglet="SANOFI - Absence";
        $titrePage="Absence";
//        echo'App/Views/absencePage.php';
        return header('App/Views/absencePage.php');
    }
}