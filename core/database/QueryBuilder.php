<?php

namespace App\Core;

use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function fetchAll($table) {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    
    
    public function fetchOne($table, $id) {
        $statement = $this->pdo->prepare("select * from $table where id = $id");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function insert($table, $parameters) {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );


        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Throwable $e) {
            die($e->getMessage());
        }

    }

    public function update($table, $parameters, $id) {

        $sql = sprintf(
            'update %s SET %s = %s, updated_At = current_timestamp() WHERE id = %s',
            $table,
            implode(', ', array_keys($parameters)),
            implode(', :', array_values($parameters)),
            $id
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Throwable $e) {
            die($e->getMessage());
        }

    }

}