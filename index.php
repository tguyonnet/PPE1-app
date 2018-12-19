<?php


session_start();

require __DIR__.'/vendor/autoload.php';



$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(['settings' => $config]);


$app->add(new \Middleware\IsConnected());

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



$app->get('/Home', \Controllers\HomeController::class . ':index')->setName('Home');
$app->get('/Formation', \Controllers\FormationController::class . ':index')->setName('accueil');
$app->get('/Connexion', \Controllers\Connexion::class . ':index')->setName('connexion');







$app->run();
