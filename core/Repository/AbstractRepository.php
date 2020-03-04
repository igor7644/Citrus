<?php

namespace App\Repository;

use App\Database\Database;

abstract class AbstractRepository
{
    public abstract function get();

    protected function connect()
    {
        $database = Database::getInsance();
        return $database->getConnection();
    }
}