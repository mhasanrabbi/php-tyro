<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;

class RegisterController
{
    public function registerView()
    {
        return ResponseHelper::renderView('auth/register', []);
    }
}