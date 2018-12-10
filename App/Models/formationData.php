<?php
include_once('API.php');

function praticionerData_findOne($id){
    //on va chercher la route pour recuperer tout les praticioner
    //affiche la fiche d'un praticien
    //$app->get('/praticioner/{id}',\Controllers\Praticien::class . ':getPraticioner');

    $praticioner= API::call();


    return $praticioner;
}


function getFormation(){
    return json_decode(file_get_contents('http://api.test/formation'));
}


function getFormationID($id){
    return json_decode(file_get_contents('http://api.test/formation'.$id));
}

function getFormationDate($date){
    return json_decode(file_get_contents('http://api.test/formation/date'.$date));
}