<?php
include_once('API.php');

//
// route API : praticioner
//
// getAll()
// getLimit()
// findOne()
// count()
// update()
// insert()

function praticionerData_findOne($id){
    //on va chercher la route pour recuperer tout les praticioner
    //affiche la fiche d'un praticien
    //$app->get('/praticioner/{id}',\Controllers\Praticien::class . ':getPraticioner');

    $praticioner= API::call();


    return $praticioner;
}

