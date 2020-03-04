<?php


namespace App\Repository;

use App\Database\Database;
use App\Entity\Product;
use PDO;

class ProductRepository implements RepositoryInterface
{
    private $table = 'products';

    public function get()
    {
        $connection = Database::getInstance();
        $connection = $connection->getConnection();
        $statement = $connection->query("SELECT * FROM $this->table JOIN images ON $this->table.id = images.product_id");
        $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }
}