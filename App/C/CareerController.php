<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\V\Career\ListeView;


/**
 * Description of CareerController
 *
 * @author usersio
 */
class CareerController extends \Core\Controller {

    public function listeAction() {

        $view = new ListeView();
        return $view;
    }
}
