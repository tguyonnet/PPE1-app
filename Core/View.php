<?php

namespace Core;

class View{
    private $_file;
    
    public function setFile($file){
        $this->_file = 'App/Templates/'.$file;
        return $this;
    }
    
    public function display(){
        $fichier=getcwd().'/'.$this->_file;
        include('App/Templates/_helper/header-sb-admin.php');
        include($fichier);
        include('App/Templates/_helper/footer-sb-admin.php');
    }
}