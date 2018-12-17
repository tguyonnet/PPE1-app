<?php

// * Fonctions d'accès aux datas
require '../App/Models/Absence.php';

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
    $absences =  Models\Absence::getAllByEmployeeId($_SESSION['id']);
//    $employee = Models\Employee::getEmployee($absences[0]->getEmployeeId());
    require '../App/Views/absence.php';
}
