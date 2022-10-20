<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'index']);
Route::get('/tasks', [TasksController::class, 'index']);

Route::get('/tasks/create', [TasksController::class, 'create']);
Route::post('/tasks', [TasksController::class, 'store']);

Route::patch('/tasks/{id}', [TasksController::class, 'update']);