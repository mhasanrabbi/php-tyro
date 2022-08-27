<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_blog_crud";
$dsn = "mysql:host=$servername;dbname=$dbname";


try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}