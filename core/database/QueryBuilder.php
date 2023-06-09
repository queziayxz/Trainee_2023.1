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

    public function selectAll($table, $inicio = null, $rows_count = null)
    {
        $sql = "SELECT * from {$table}";

        if($inicio >= 0 && $rows_count > 0)
        {
            $sql .= " LIMIT {$inicio}, {$rows_count}";
        }

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function selectAll($table)
    // {
    //     $sql = "select * from {$table}";

    //     try {
    //         $stat = $this->pdo->prepare($sql);

    //         $stat->execute();

    //         return $stat->fetchAll(PDO::FETCH_CLASS);
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    public function selectPost($id, $table)
    {
        $sql = sprintf("SELECT * FROM %s WHERE %s", $table, "id = $id");
        
        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectUltimosPosts($table)
    {
        $sql = sprintf("SELECT * FROM %s ORDER BY %s desc LIMIT %s", $table, 'id', "5");
        
        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }


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

    public function login($table, $email, $password)
    {
        $sql = sprintf('SELECT * FROM %s WHERE email = :email and password = :password', $table);
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function busca($pesquisa, $inicio, $itensPagina){
        $sql = "SELECT * FROM posts WHERE title LIKE '%$pesquisa%'";

        if($inicio >= 0 && $itensPagina > 0)
        {
            $sql .= " LIMIT {$inicio}, {$itensPagina}";
        }

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $resultado = json_encode($result);
            return json_decode($resultado);

        } catch (Exception $e) {
            die($e->getMessage());
        }
       
    }
    public function countAll($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return intval($statement->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die("Ocorreu um erro ao tentar contar pelo banco de dados: {$e->getMessage()}");
        }
    }

}

