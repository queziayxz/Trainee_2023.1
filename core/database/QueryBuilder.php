<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;',
            $table,
            "id = :id"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
