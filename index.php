<?php


session_start();
/*

// * Penser à mettre un index.php dans www qui redirige vers cet index là !
include('Core/Config.php');
include('App/Controllers/connexionControllers.php');
include('App/Controllers/accueilControllers.php');
include('App/Controllers/formationControllers.php');
include('App/Controllers/carriereControllers.php');
include('App/Controllers/absenceControllers.php');
include('App/Controllers/praticionerControllers.php');





// * remplacer ici les tests sur les GET par une fonction de validation ou de nettoygae par sécurité avant de l'injecter dans un module
// * Ici aussi on mettrait le test à la variable de SESSION


// * Vérifier les paramètres du GET

$controle='';
if (isset($_GET['c']))
	{
		$controle=$_GET['c'];
	}
	
$action='';
if (isset($_GET['action']))
	{
		$action=$_GET['action'];
	}


if(isset($_SESSION)){
    if (isset($_SESSION['id'])) {
        // * L'action demandée est envoyée vers le Controllers associé à la page demandée
        // * Cette action est orientée métier : ce que souhaite le client comme fonctionalités, indépendament de la notion de tables!
        switch ($controle) {
            case 'Accueil' :
                accueilControle($action);
                break;

            case 'Formation' :
                formationControle($action);
                break;

            case 'Carriere' :
                carriereControle($action);
                break;

            case 'Absence' :
                absenceControle($action);
                break;
            default :
                // A défaut par sécurité, c'est direct retour à l'authentification
                connexionControle($action);
                break;
        }
    }else{
        connexionControle($action);
    }
}else{
        connexionControle($action);
}

*/


require __DIR__.'/vendor/autoload.php';



$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(['settings' => $config]);




$container = $app->getContainer();
$container['view'] = function ($container){

    $view = new \Slim\Views\Twig(__DIR__ . '/App/Views');

    $view->addExtension(new \Slim\Views\TwigExtension(
       $container->router,
       $container->request->getUri()
    ));
    return $view;
};



$container['HomeController'] = function ($container) {
    return new \Controllers\HomeController($container);
};



$app->get('/Home', \Controllers\HomeController::class.':index');








/**
 * @todo voir le container
 * @todo créer absolument une méthode _invoke dans cette classe container
 * qui gere toutes les routes toute seule,
 * https://www.slimframework.com/docs/v3/concepts/middleware.html
 * https://www.slimframework.com/docs/v3/concepts/di.html
 * https://www.slimframework.com/docs/v3/features/templates.html#the-slimtwig-view-component
 * https://www.youtube.com/watch?v=2u7VxiyKqYk&list=PLfdtiltiRHWGc_yY90XRdq6mRww042aEC&index=2
 */



$app->run();
