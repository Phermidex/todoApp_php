<?php

namespace App\Core;

class Request {

    public static function uri() {
        if(isset($_SERVER['PATH_INFO'])){
            return $_SERVER['PATH_INFO'];
        }
        return '/';
    }


    public static function method() {

        return $_SERVER['REQUEST_METHOD'];

    }

}