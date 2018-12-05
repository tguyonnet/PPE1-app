<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class DemandeTransportModel extends DataObject
{
    protected static $_table='demandeTransport';

    public $id;
    public $client_id;
    public $villeDepart;
    public $villeArrivee;
    public $distance;
    public $duree;
    public $typeMarchandise_id;
    public $volume;
    public $poids;
    public $dateDemande;
    public $dateLimite;


}
