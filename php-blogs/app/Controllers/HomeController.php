<?php

namespace App\Controllers;

use App\Helpers\Database;

class HomeController
{
    public function index()
    {
        $database = Database::getInstance();
        return "Hello Movie Watchlist";
    }
}