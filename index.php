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
$app->add(new \Middleware\IsConnected());




$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('formation');
$app->get('/Carriere', \Controllers\CarriereController::class . ':indexCarriere')->setName('carriere');
$app->get('/Absence', \Controllers\AbsenceController::class . ':index')->setName('absence');
$app->get('/Dashboard', \Controllers\DashboardController::class . ':index')->setName('dashboard');
$app->get('/Poste', \Controllers\CarriereController::class . ':indexPoste')->setName('poste');

$app->get('/Deconnexion', \Controllers\ConnexionController::class . ':getLogout')->setName('logout');
$app->get('/Connexion', \Controllers\ConnexionController::class . ':getLogin')->setName('login');
$app->post('/Connexion', \Controllers\ConnexionController::class . ':postLogin');





$app->run();