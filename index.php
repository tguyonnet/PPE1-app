<?php

require __DIR__.'/vendor/autoload.php';


session_start();


$config['displayErrorDetails'] = false;
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

$app->get('/AddFormation', \Controllers\FormationController::class . ':addFormation')->setName('form_formation');
$app->get('/AddAbsence', \Controllers\AbsenceController::class . ':addAbsence')->setName('form_absence');



$app->get('/Parametre', \Controllers\ParametreController::class . ':index')->setName('parametre');
$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('formation');
$app->get('/Carriere', \Controllers\CarriereController::class . ':indexCarriere')->setName('carriere');
$app->get('/Absence', \Controllers\AbsenceController::class . ':index')->setName('absence');
$app->get('/Dashboard', \Controllers\DashboardController::class . ':index')->setName('dashboard');
$app->get('/Poste/{post_id}', \Controllers\CarriereController::class . ':indexPoste')->setName('poste');


$app->get('/Deconnexion', \Controllers\ConnexionController::class . ':getLogout')->setName('logout');
$app->get('/Connexion', \Controllers\ConnexionController::class . ':getLogin')->setName('login');
$app->post('/Connexion', \Controllers\ConnexionController::class . ':postLogin');

$app->run();