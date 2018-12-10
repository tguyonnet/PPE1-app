<?php

// * Fonctions d'accès aux datas

function carriereControle($action) {
	// * Sélecteur d'actions pour la page d'authentification. Défini les actions à faire en fonction du click précédent puis la page à afficher ensuite
	switch ($action) {
		default :
            carriereControle_defaultAction();
		break;
	}
}

function carriereControle_defaultAction() {
	$titreOnglet="SANOFI - Carriere";
    $titrePage="Carriere";
	require '../App/Views/carrierePage.php';
}
