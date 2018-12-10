<?php

function listesControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		default : 
			listesControle_defaultAction();
		break;
	}
}

function listesControle_defaultAction() {
    $titreOnglet="M2L - Listes";
    $titrePage="Listes";
	require '../App/Views/praticionerPage.php';
}


