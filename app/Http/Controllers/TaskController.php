<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks/index', ['tasks' => $tasks]);
    }


    public function show(Task $task)
    {
        $state = $task->completed;
        return view('tasks/show', ['task' => $task, 'state' => $state]);
    }
}
