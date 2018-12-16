<?php

namespace Models;

class API {



    public static function __call($url)
    {
        if (is_string($url) && $url!='') {
            //  Initiate curl
            $ch = curl_init();
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL, $url);
            //  Execute
            $response = curl_exec($ch);
            // Closing
            curl_close($ch);
            return json_decode($response);
        }else{
            return 'La route n\'est pas valide';
        }
    }


}
