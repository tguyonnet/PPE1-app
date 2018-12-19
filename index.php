<?php


session_start();

require __DIR__.'/vendor/autoload.php';



$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(['settings' => $config]);


//$app->add(new \Middleware\IsConnected());


$container = $app->getContainer();

$container['view'] = function ($container){

    $view = new \Slim\Views\Twig(__DIR__ . '/App/Views');

    $view->addExtension(new \Slim\Views\TwigExtension(
       $container->router,
       $container->request->getUri()
    ));
    return $view;
};




$app->get('/Home', \Controllers\HomeController::class . ':index')->setName('home');
$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('formation');
$app->get('/Connexion', \Controllers\Connexion::class . ':getLogin')->setName('login');
$app->post('/Connexion', \Controllers\Connexion::class . ':postLogin');





$app->run();