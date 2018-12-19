<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 19/12/18
 * Time: 09:16
 */

namespace Core;


class View
{

    private $_file;

    public function __construct($controller,$action){
        $file =implode('/',array_slice(explode('\\',$controller),3)).'/'.$action;
        $this->setFile($file);
    }

    public function setFile($file){
        $this->_file = 'App/V/'.$file.'.php';
        return $this;
    }

    public function display(){
        $fichier=getcwd().'/'.$this->_file;

        if ($this->_file == 'App/V/DashBoardController/loginAction.php'){
            include('App/V/_helper/header-login.php');
            include($fichier);

            include('App/V/_helper/footer-login.php');
        }else{
            include('App/V/_helper/header-sb-admin.php');
            include($fichier);
            include('App/V/_helper/footer-sb-admin.php');
        }

    }

}