<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        // Get all of the tasks upon visiting homepage
        $tasks = Task::orderBy('id', 'desc')->get();
        // Display / Render all of the tasks that we have

        // Pass the data to our index view
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
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

        Task::create($formRequest);

        // Return to the homepage when a task is created
        return redirect('/');
    }

    // Mark a task as completed
    public function update($id)
    {
        $task = Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();

        return redirect('/');
    }
    // Divivde the tasks into completed and uncompleted section
    // Delete a task permanently
}