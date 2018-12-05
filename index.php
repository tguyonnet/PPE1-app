<?php

// Voir un max d'érreurs à l'écran pour le debug
error_reporting(E_ALL);

// On se place dans le répertoire racine du projet
chdir(__DIR__);

// Inclusion automatique des fichiers de classes des que le compilateur PHP en voit une dans le code ci-dessous
function __autoload($class){
    $fichier=__DIR__.'/'.str_replace('\\','/',$class).".php";
    if(file_exists($fichier)){
        include($fichier);
    }else{
        var_dump(getcwd());
        var_dump($fichier);
    }
}

//Prépare la connexion à la bdd
$connection = \Core\Connection::setup('connection','mysql:host='.\Core\Config::BDD_HOST.';dbname='.\Core\Config::BDD_NAME, \Core\Config::BDD_USER, \Core\Config::BDD_PASSWORD, array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
\Core\DataObject::setConnection($connection);

//Création du controller
switch(Core\Params::get('c')){


    case 'Formation':
        $controller = new \App\C\FormationController();
        break;
    default:
        $controller = new \App\C\DashBoardController();
        break;
}

//appel de la méthode du controller
$actionName=  \Core\Params::post('a',  \Core\Params::get('a','liste')).'Action';
$view = $controller->$actionName();

// On affiche la vue que le controlleur a construit
if(null!=$view) {
    $view->display();
}


