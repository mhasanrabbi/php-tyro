<?php

namespace App\Models;

use App\Helpers\Database;

class User
{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function getUserByEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $queryURI = "SELECT count(*) AS isUserAvailable FROM users WHERE email=:email";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":email", $email);
        // $query->bindValue(":password", $password);
        $query->execute();
        return $query->fetch($this->connection::FETCH_ASSOC);
        // collect a user with an email
    }

    public function auth($email, $password)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $queryURI = "SELECT name,email,password FROM users WHERE email=:email";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":email", $email);

        $query->execute();
        $user = $query->fetch($this->connection::FETCH_ASSOC);

        if (password_verify($password, $user['password'])) {
            // var_dump('user pass matched');exit;
            unset($user['password']);
            return $user;
        }

        throw new \Exception('User email or password incorrect');
    }
    public function save(array $user)
    {

        // var_dump($user);
        // exit;
        $name = htmlspecialchars($user['name']);
        $email = filter_var($user['email'], FILTER_VALIDATE_EMAIL);
        $password = password_hash($user['password'], PASSWORD_BCRYPT);


        // var_dump($name, $email, $password);exit;
        // do store the user data into database
        $queryURI = "INSERT INTO users (name, email, password) VALUES (:username, :email, :password)";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":username", $name);
        $query->bindValue(":email", $email);
        $query->bindValue(":password", $password);

        return $query->execute();
    }
}