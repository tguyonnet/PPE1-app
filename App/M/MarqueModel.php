<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class MarqueModel extends DataObject
{
    protected static $_table='marque';

    public $id;
    public $libelle;
}