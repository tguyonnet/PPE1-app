<?php

namespace Core;

class Params{
    static function post($key=null,$default=null){
        if(is_null($key)){
            return $_POST;
        }else{
            return isset($_POST[$key]) ? $_POST[$key] : $default;
        }
    }
    static function get($key=null,$default=null){
        if(is_null($key)){
            return $_GET;
        }else{
            return isset($_GET[$key]) ? $_GET[$key] : $default;
        }
    }
}