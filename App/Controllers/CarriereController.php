<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 19:54
 */

namespace Controllers;

use Models\Career;
use Models\Post;

class CarriereController extends Controller
{

    /**
     * Afficher la vue carriere.twig
     * @param $request
     * @param $response
     * @return mixed
     */
    public function indexCarriere($request, $response)
    {
        $posts =  Career::getCareerEmployeePost($_SESSION['id']);
        $detail = Post::getCareerEmployeePostDetails($_SESSION['id'], $posts[0]->getId());
        return $this->view->render($response, 'carriere.twig',['page' => self::display('Carriere'), 'posts' => $posts, 'detail' => $detail]);
    }


    /**
     * Afficher la vue poste.twig
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function indexPoste($request, $response, $args)
    {
        $detail = Post::getCareerEmployeePostDetails($_SESSION['id'], $args['post_id']);
        return $this->view->render($response, 'poste.twig',['page' => self::display('Poste'), 'detail' => $detail]);
    }


}

