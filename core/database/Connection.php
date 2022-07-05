<?php 

class Connection {


    public static function start($config) {

        try {
            return new PDO(
                 'mysql:host='.$config['host'].';port='.$config['port'].';dbname='.$config['dbname'],
                 $config['username'],
                 $config['password']
                );
         } catch (PDOException $e) {
             die($e->getMessage());
         }

    }

}
