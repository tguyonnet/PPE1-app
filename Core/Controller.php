<?php

namespace Core;

class Controller {
//controller
    static protected $_view;

    static public function setView(View $view) {
        return self::$_view = $view;
    }

    static public function getView(){
        return self::$_view ;
    }

}
