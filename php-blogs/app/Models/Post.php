<?php

namespace App\Models;

use App\Helpers\Database;

class Post
{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function createPost(array $post)
    {
        // var_dump("Hello");
        // exit;
        $title = $post['title'];
        $author = $post['author'];
        $image = $post['image'];

        // do store the user data into database
        $queryURI = "INSERT INTO posts (title, author, image) VALUES (:title, :author, :image)";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":title", $title);
        $query->bindValue(":author", $author);
        $query->bindValue(":image", $image);

        return $query->execute();

        // var_dump($title, $author, $image);
        // exit;
    }

    public function getAllPosts()
    {
        $queryURI = "SELECT * FROM posts";
        $query = $this->connection->prepare($queryURI);
        $query->execute();
        return $query->fetchAll($this->connection::FETCH_ASSOC);
    }

    public function getPostById($post)
    {
        $id = $post['id'];
        $queryURI = "SELECT * FROM posts WHERE id = :id LIMIT 1";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":id", $id);
        $query->execute();
        $query->fetchAll($this->connection::FETCH_ASSOC);
    }
};