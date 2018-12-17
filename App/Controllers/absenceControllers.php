<?php

// * Fonctions d'accès aux datas


function absenceControle($action) {
	// * Sélecteur d'actions pour la page d'authentification. Défini les actions à faire en fonction du click précédent puis la page à afficher ensuite
	switch ($action) {
		default :
            absenceControle_defaultAction();
		break;
	}
}

function absenceControle_defaultAction() {
	$titreOnglet="SANOFI - Absence";
    $titrePage="Absence";
	require '../App/Views/absence.php';
}
