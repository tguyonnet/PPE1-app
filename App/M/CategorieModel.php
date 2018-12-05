<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class CategorieModel extends DataObject
{
    protected static $_table='categorie';

    public $id;
    public $libelle;
    public $permis_did;
}