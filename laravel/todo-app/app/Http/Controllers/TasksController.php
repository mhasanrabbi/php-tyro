<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('completed_at', 'ASC')->orderBy('id', 'desc')->get();

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

    // Delete a task permanently
    public function delete($id)
    {
        $task = Task::where('id', $id)->first();

        $task->delete();

        return redirect('/');
    }
}