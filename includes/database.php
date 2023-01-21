<?php
class Database
{
    private $connection;

    public static function connect($server, $dbname, $username, $password)
    {

        $database = null;

        try {
            $connection = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $database = new Database();
            $database->connection = $connection;
        } catch (PDOException $ex) {
            echo $ex;
        }

        return $database;
    }

    public function in($query, $params)
    {
        $stmt = $this->connection->prepare($query);

        if ($params != null) {
            foreach ($params as $name => $value) {
                $stmt->bindParam($name, $value);
            }
        }

        return $stmt;
    }

    public function execute($query, $params)
    {
        $stmt = $this->in($query, $params);
        $stmt->execute();
    }

    public function query($query, $params)
    {
        $stmt = $this->in($query, $params);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}