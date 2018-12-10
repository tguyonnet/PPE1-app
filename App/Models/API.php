<?php

/*
 * Deux fonctions sont crées pour lancer une requéte SQL. Un exmple d'appel de ces fonctions dans du code :
 *  - $tableauDeResultats = Connexion::query("SELECT * FROM nom_table");
 *    Le résultat de la requète est enregistré dans la variable $tableauDeResultats 
 *  - $succes = Connexion::exec("INSERT..."); marche aussi pour UPDATE et DELETE
 *    Le résultat de la requete est placé dans la variable $succes : si 0 alors la requète n'a pas
 *    fonctionnée, sinon $succes contiendra le nombre d'enregistrement affectés
 */

class API {

    public static  function call($method,$url,$data) {

        $curl = curl_init();

        switch ($method){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'APIKEY: 111111111111111111111',
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){die("Connection Failure");}
        curl_close($curl);
        return $result;
    }

}
