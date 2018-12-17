<?php

// * Fonctions d'accès aux datas

function formationControle($action) {
	// * Sélecteur d'actions pour la page d'authentification. Défini les actions à faire en fonction du click précédent puis la page à afficher ensuite
	switch ($action) {
		default :
            formationControle_defaultAction();
		break;
	}
}

function formationControle_defaultAction() {
	$titreOnglet="SANOFI - Formation";
    $titrePage="Formation";
	require '../App/Views/formation.php';
}
