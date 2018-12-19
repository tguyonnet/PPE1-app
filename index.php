<?php

require __DIR__.'/vendor/autoload.php';


session_start();


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


//Middleware
$app->add(new \Middleware\IsConnected($container->view->getEnvironment()));


$app->get('/Home', \Controllers\HomeController::class . ':index')->setName('dashboard');
$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('formation');
$app->get('/Connexion', \Controllers\Connexion::class . ':getLogin')->setName('login');
$app->post('/Connexion', \Controllers\Connexion::class . ':postLogin');





$app->run();