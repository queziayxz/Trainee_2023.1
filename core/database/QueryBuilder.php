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

    public function insert($table,$parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table , implode(', ', array_keys($parameters)),
             ':' . implode(', :', array_keys($parameters))
        );

        try{
            $stnt = $this->pdo->prepare($sql);
            $stnt->execute($parameters);

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

    public function edit($table,$id, $parametros)
    {
        $sql = sprintf(
            'UPDATE %s 
            SET %s
            WHERE %s;',
            $table,
            implode(', ', array_map(function ($parametros){
                return "{$parametros} = :{$parametros}";
            }, array_keys($parametros))),
            'id = :id'
        );

        $parametros['id'] = $id;

        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parametros);
        }catch(Exception $e){
            die("Ocorreu um erro ao tentar atualizar o banco de dados: {$e->getMessage()}");
        }
        // var_dump($sql);
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
