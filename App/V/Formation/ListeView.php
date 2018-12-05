<?php

namespace App\V\Formation;


use \RedBeanPHP\R as R;


class  ListeView extends \Core\View {
    /**
     * ListeView constructor.
     * @param $title
     */
    public function __construct()
    {
        $this->setFile('Formation/listeTemplate.php');

    }

    public function getTitle()
    {
        return '';
    }




}