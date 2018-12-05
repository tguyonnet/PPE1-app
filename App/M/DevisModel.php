<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class DevisModel extends DataObject
{
    protected static $_table='devis';

    public $id;
    public $demandeTransport_id;
    public $montant;
    public $dateEnvoi;
    public $dateArriveePrevue;
    public $valide;
}