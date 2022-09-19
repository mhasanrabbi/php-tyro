<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;

class AuthController
{
    public function loginView()
    {
        return ResponseHelper::renderView('auth/login', []);
    }
}