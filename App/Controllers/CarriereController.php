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
    public function index($request, $response)
    {
        $posts =  Career::getCareerEmployeePost($_SESSION['id']);

        $detail = Post::getCareerEmployeePostDetails($_SESSION['id'], $posts[0]->getId());
        var_dump($detail);

//        $details= array();
//        foreach ($posts as $post){
////            $details += Post::getCareerEmployeePostDetails($_SESSION['id'], $post->getId());
//            var_dump($post->getId());
//        }


        return $this->view->render($response, 'carriere.twig',['page' => self::display('Carriere'), 'posts' => $posts ]);
    }

}

