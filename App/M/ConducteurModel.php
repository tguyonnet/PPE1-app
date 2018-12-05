<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class ConducteurModel extends DataObject
{
    protected static $_table='conducteur';

    public $id;
    public $nom;
    public $prenom;
    public $dateEmbauche;
    public $dateNaissance;
    public $dateSortie;
}