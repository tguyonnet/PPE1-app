<?php

namespace App\V\Absence;


use \RedBeanPHP\R as R;


class  ListeView extends \Core\View {
    /**
     * ListeView constructor.
     * @param $title
     */
    public function __construct()
    {
        $this->setFile('Absence/listeTemplate.php');

    }

    public function getTitle()
    {
        return '';
    }




}