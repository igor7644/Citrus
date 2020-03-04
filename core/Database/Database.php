<?php

namespace App\Database;
use PDO;


class Database
{
    private static $instance = null;
    private $host = 'localhost';
    private $dbName = 'citrus';
    private $username = 'root';
    private $password = '';
    private $connection;

    private function __construct()
    {
        $this->connection = new PDO('mysql:host=' . $this->host . ';' . 'dbname=' . $this->dbName, $this->username,
        $this->password);
    }

    public static function getInstance()
    {
        if(self::$instance)
        {
            return self::$instance;
        }
        self::$instance = new Database();
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
