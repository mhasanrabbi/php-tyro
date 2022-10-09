<?php

namespace App\Controllers;

use App\Helpers\Database;
use App\Helpers\ResponseHelper;
use App\Models\Post;

class HomeController
{
    public function index()
    {
        $database = Database::getInstance();
        return ResponseHelper::renderView('master');
    }
    public function edit()
    {
        return ResponseHelper::renderView('edit');
    }

    public function editPost()
    {
        $id = $_REQUEST['id'];
        $data = new Post();
        $result = $data->getPost($id);
        return $result;
    }

    public function updatePost()
    {
        $post = new Post();
        $post->updatePost($_POST);
        header('Location: /dashboard');
    }

    public function delete()
    {
        return ResponseHelper::renderView('delete');
    }

    public function deletePost()
    {
        $id = $_REQUEST['id'];
        $post = new Post();
        $post->deletePost($id);
        header('Location: /dashboard');
    }
}