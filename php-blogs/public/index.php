<?php
// print_r(PDO::getAvailableDrivers());
// phpinfo();

session_start();

use App\Controllers\DashboardController;
use App\Helpers\Database;

require_once __DIR__ . './../vendor/autoload.php';

// load dotenv config
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// load db config
$dbConfig = include_once __DIR__ . '/../config/database.php';

Database::loadConfig($dbConfig);


use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\RegisterController;
use App\Controllers\PostController;

// var_dump($_SERVER);exit;

// var_dump($_SERVER);exit;

$path = $_SERVER['PATH_INFO'] ?? '/';

if ($path == '/login') {

    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
        echo (new AuthController())->loginView();
    } else {
        echo (new AuthController())->login();
    }
} elseif ($path == '/register') {
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
        echo (new RegisterController())->registerView();
    } else {
        echo (new RegisterController())->register();
    }
} elseif ($path == '/create') {
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
        echo (new PostController())->createView();
    } else {
        echo (new PostController())->save();
    }
} elseif ($path == '/edit') {
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
        echo (new HomeController())->edit();
        echo (new HomeController())->editPost();
    } else {
        echo (new HomeController())->updatePost();
    }
} elseif ($path == '/dashboard') {
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
        echo (new DashboardController())->index();
    } else {
        echo (new HomeController())->deletePost();
    }
} elseif ($path == '/delete') {
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
        echo (new HomeController())->delete();
        // echo (new HomeController())->editPost();
    } else {
        echo (new HomeController())->deletePost();
    }
} elseif ($path == '/dashboard') {
    echo (new DashboardController())->index();
} elseif ($path == '/create') {
    echo (new DashboardController())->create();
} elseif ($path == '/logout') {
    echo (new AuthController())->logout();
} else {
    echo (new HomeController())->index();
}