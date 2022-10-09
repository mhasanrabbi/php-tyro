<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\Post;

class PostController
{

    public function createView()
    {
        return ResponseHelper::renderView('/create', []);
    }

    public function updateView()
    {
        return ResponseHelper::renderView('/update', []);
        // $postById = new Post();
        // $postById->getPostById($_GET);
        // return $postById;
    }

    public function index()
    {
        $data = new Post();
        $result = $data->getAllPosts();
        return $result;
    }

    public function save()
    {
        $post = new Post();
        $post->createPost($_POST);
        header('Location: /dashboard');
        // var_dump($_POST);
        // var_dump($_FILES);
    }

    public function update()
    {
    }
}