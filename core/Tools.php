<?php

namespace App\Core;

class Tools {

    public function baseURL($uri) {
        $url = '';
    
        if(isset( $_SERVER["HTTP"] ) && strtolower( $_SERVER["HTTP"] ) == "on"){
            $url .= 'https://todoapp345.herokuapp.com/index.php/';
        }else{
            $url .= 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].$uri;
        }
        
        return $url;
    }

}
