<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class ModeleModel extends DataObject
{
    protected static $_table='modele';

    public $id;
    public $libelle;
    public $poidsVide;
    public $volumeUtile;
    public $vitesseMoyenne;
    public $vitesseMaximum;
    public $marque_id;
    public $volume;
    public $categorie_id;
}