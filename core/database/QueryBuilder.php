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

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
            
        }catch(Exception $e){
            die("Ocorreu um erro ao tentar deletar do banco de dados: {$e->getMessage()}");
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
    
    } 


}
