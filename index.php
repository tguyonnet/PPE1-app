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


## Formation
$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('formation');

$app->get('/Formation/ajouter', \Controllers\FormationController::class . ':addFormation')->setName('add_formation');
$app->post('/Formation/ajouter/', \Controllers\FormationController::class . ':addFormation_traitement')->setName('addFormation_traitement');

$app->get('/Formation/supprimer/{formation_id}', \Controllers\FormationController::class . ':deleteFormation')->setName('delete_formation');



## Absence
$app->get('/Absence', \Controllers\AbsenceController::class . ':index')->setName('absence');

$app->get('/Absence/ajouter', \Controllers\AbsenceController::class . ':addAbsence')->setName('addAbsence');
$app->post('/Absence/ajouter', \Controllers\AbsenceController::class . ':addAbsenceTraitement')->setName('addAbsenceTraitement');

$app->get('/Absence/modifier/{absence_id}', \Controllers\AbsenceController::class . ':editAbsence')->setName('edit_absence');
$app->post('/Absence/modifier/{absence_id}', \Controllers\AbsenceController::class . ':editAbsenceTraitement')->setName('edit_absenceTraitement');

$app->get('/Absence/delete/{absence_id}', \Controllers\AbsenceController::class . ':deleteAbsenceTraitement')->setName('deleteAbsenceTraitement');




## Carriere
$app->get('/Carriere', \Controllers\CarriereController::class . ':indexCarriere')->setName('carriere');
$app->get('/Poste/{post_id}', \Controllers\CarriereController::class . ':indexPoste')->setName('poste');



## Connexion
$app->get('/Deconnexion', \Controllers\ConnexionController::class . ':getLogout')->setName('logout');
$app->get('/Connexion', \Controllers\ConnexionController::class . ':getLogin')->setName('login');
$app->post('/Connexion', \Controllers\ConnexionController::class . ':postLogin');



## General
$app->get('/Parametre', \Controllers\ParametreController::class . ':index')->setName('parametre');
$app->get('/Dashboard', \Controllers\DashboardController::class . ':index')->setName('dashboard');


$app->run();