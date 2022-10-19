<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {

        $formRequest = $request->only([
            'description'
        ]);

        $task = Task::create($formRequest);

        return dd($task);
    }


    // Handle the task submission data
    // Create a task
    // Display a list of tasks
    // Mark a task as completed
    // Divivde the tasks into completed and uncompleted section
    // Delete a task permanently
}