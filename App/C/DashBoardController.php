<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\V\DashBoard\ListeView;


/**
 * Description of DashBoardController
 *
 * @author usersio
 */
class DashBoardController extends \Core\Controller {

    public function listeAction() {

        $view = new ListeView();
        return $view;
    }
}
