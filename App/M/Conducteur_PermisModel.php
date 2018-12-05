<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class Conducteur_PermisModel extends DataObject
{
    protected static $_table='conducteur_permis';

    public $id;
    public $conducteur_id;
    public $permis_id;
    public $dateObtention;
}