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
        try
        {
            $connection = Database::getInstance();
            $connection = $connection->getConnection();
            $statement = $connection->query("SELECT * FROM $this->table WHERE approved = true");
            $comments = $statement->fetchAll(PDO::FETCH_CLASS, Comment::class);
            return $comments;
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function getUnapproved()
    {
        try
        {
            $connection = Database::getInstance();
            $connection = $connection->getConnection();
            $statement = $connection->query("SELECT * FROM $this->table WHERE approved = false");
            $comments = $statement->fetchAll(PDO::FETCH_CLASS, Comment::class);
            return $comments;
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }

    }

    public function approve($comment)
    {
        try
        {
            $connection = Database::getInstance();
            $connection = $connection->getConnection();
            $statement = $connection->prepare("UPDATE $this->table SET approved = true where id = :id");
            $statement->bindParam(":id", $comment);
            if (!$statement->execute())
            {
                return false;
            }
            return true;
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }

    }

    public function store($data)
    {
        try
        {
            $connection = Database::getInstance();
            $connection = $connection->getConnection();
            $statement = $connection->prepare("INSERT INTO $this->table (name, email, comment) VALUES (:name, :email, :comment)");
            $statement->bindParam(':name', $data['name']);
            $statement->bindParam(':email', $data['email']);
            $statement->bindParam(':comment', $data['comment']);
            $statement->execute();
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }

    }
}