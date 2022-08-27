<?php
session_start();
include 'db_connection.php';

function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Update Post

if (isset($_POST['updatePost'])) {
    $post_id = sanitize($_POST['post_id']);
    $title = sanitize($_POST['title']);
    $category = sanitize($_POST['category']);
    $author = sanitize($_POST['author']);
    $published_at = sanitize($_POST['published_at']);
    $image_url = sanitize($_POST['image_path']);

    try {
        $query = "UPDATE posts SET title = :title, category = :category, author_name = :author, published_at = :published_at, image_path = :image_url WHERE id = :post_id";
        $statement = $conn->prepare($query);
        $data = [
            ':title' => $title,
            ':category' => $category,
            ':author' => $author,
            ':published_at' => $published_at,
            ':post_id' => $post_id,
            ':image_url' => $image_url
        ];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['success'] = "Post updated successfully";
            header('location: index.php');
            exit(0);
        } else {
            $_SESSION['error'] = "Something went wrong";
            header('location: index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    header('Location: index.php');
}


// Add Post
if (isset($_POST['addPost'])) {
    $post_id = sanitize($_POST['post_id']);
    $title = sanitize($_POST['title']);
    $category = sanitize($_POST['category']);
    $author = sanitize($_POST['author']);
    $published_at = sanitize($_POST['published_at']);
    $image_url = sanitize($_POST['image_path']);

    try {
        $query = "INSERT INTO posts (title, category, author_name, published_at, image_path) VALUES (:title, :category, :author, :published_at, :image_url)";
        $statement = $conn->prepare($query);
        $data = [
            ':title' => $title,
            ':category' => $category,
            ':author' => $author,
            ':published_at' => $published_at,
            ':image_url' => $image_url
        ];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['success'] = "Post Added Successfully";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['error'] = "Something went wrong";
            header('Location: index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    header('Location: index.php');
}

// Delete Post
if (isset($_POST['deletePost'])) {
    $post_id = sanitize($_POST['deletePost']);
    try {
        $query = "DELETE FROM posts WHERE id = :post_id";
        $statement = $conn->prepare($query);
        $data = [
            ':post_id' => $post_id
        ];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['success'] = "Post deleted successfully";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['error'] = "Something went wrong";
            header('Location: index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    header('Location: index.php');
}