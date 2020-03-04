<?php

namespace App\Repository;

use App\Database\Database;
use App\Entity\Comment;
use PDO;


class CommentRepository implements RepositoryInterface
{
    private $table = 'comments';

    public function get()
    {
        $connection = Database::getInstance();
        $connection = $connection->getConnection();
        $statement = $connection->query("SELECT * FROM $this->table WHERE approved = 1");
        $comments = $statement->fetchAll(PDO::FETCH_CLASS, Comment::class);
        return $comments;
    }
}