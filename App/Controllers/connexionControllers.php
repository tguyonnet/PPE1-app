<?php

use Models\API as api;

function connexionControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		case 'connecter' :
			connexionControle_connecterAction($_POST['email'], $_POST['password']);
		break;

/*		case 'inscrire' :
			connexionControle_inscrireAction();
		break;
		case 'oublier' :
			connexionControle_oublierAction();
		break;*/

		case 'deconnecter' :
			connexionControle_deconnecterAction();
		break;
		default : 
			connexionControle_formAction();
		break;
	}
}


// Voir la notion de paramètres par défaut dans une fonction PHP !
function connexionControle_formAction($message=null) {
    $titreOnglet="SANOFI - Connexion";
    $titrePage='Se connecter à '.Config\Config::APPLI_NAME.' '.Config\Config::APPLI_VERSION;
    $alerte = $message;
    require '../App/Views/connexionPage.php';
}


function connexionControle_connecterAction($email, $password) {
    $url = 'http://api.test/employee/'.$email.'/'.$password;
    //  Initiate curl
    $ch = curl_init();
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL, $url);
    //  Execute
    $response = curl_exec($ch);
    // Closing
    curl_close($ch);
    $result = json_decode($response);

	if ($result->data!=null){
	    $_SESSION['id'] = $result->data;
        accueilControle_defaultAction();
	}
	else{
		connexionControle_formAction("Identifiants inconnus !");
	}
}

function connexionControle_oublierAction($message=null) {
 
}
function connexionControle_inscrireAction($message=null) {

}

function connexionControle_deconnecterAction() {
    session_destroy();
    session_unset();
    header('Location: index.php');
}


