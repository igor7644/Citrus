<?php

namespace App\Database;
use PDO;


class Database
{
    private static $connection = null;
    private $host = 'localhost';
    private $dbName = 'citrus';
    private $username = 'root';
    private $password = '';

    private function __construct()
    {
        self::$connection = new PDO('mysql:host=' . $this->host . ';' . 'dbname=' . $this->dbName, $this->username,
        $this->password);
    }

    public static function getConnection()
    {
        if(self::$connection)
        {
            return self::$connection;
        }
        self::$connection = new Database();
        return self::$connection;
    }
}