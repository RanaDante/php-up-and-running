<?php 
namespace Core;
use PDO;
use PDOException;

class Database {

    protected $connection;
    protected $statement;
    protected $args = [];
    public function __construct($config) {
        $dsn = 'mysql:' . http_build_query($config,'',';');
        $this->connection = new PDO($dsn);
    }

    public function query($query, $args=[]) {
        // query data and show it
        $this->args = $args;
        $this->statement = $this->connection->prepare($query);
        return $this;
    }

    public function fetchOrAbort() {
        $this->statement->execute($this->args);
        $result = $this->statement->fetch();
        if(empty($result)) {
            abort();
        }
        return $result;
    }

    public function fetchAllOrAbort() {
        $this->statement->execute($this->args);
        $result = $this->statement->fetchAll(PDO::FETCH_ASSOC);
        if(empty($result)) {
            return $this->statement->rowCount();
        }
        return $result;
    }

    public function insertOrAbort() {
        try {
            $this->statement->execute($this->args);
            return $this->connection->lastInsertId();
        }catch(PDOException $e) {
            abort(1064);
        }
    }

    public function deleteOrAbort() {
            $this->statement->execute($this->args);
            return $this->statement->rowCount();
    }
}