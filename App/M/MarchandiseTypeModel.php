<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\DataObject;

class MarchandiseTypeModel extends DataObject
{
    protected static $_table='marchandiseType';

    public $id;
    public $libelle;
}