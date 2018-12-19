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


$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('formation');
$app->get('/Carriere', \Controllers\CarriereController::class . ':index')->setName('carriere');
$app->get('/Absence', \Controllers\AbsenceController::class . ':index')->setName('absence');
$app->get('/Dashboard', \Controllers\DashboardController::class . ':index')->setName('dashboard');

$app->get('/', \Controllers\ConnexionController::class . ':getLogin')->setName('login');
$app->post('/', \Controllers\ConnexionController::class . ':postLogin');





$app->run();