<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class TasksController extends Controller
{
    public function index()
    {
        $name  = 'John';
        $tasks = App\Task::all();

        return view('tasks.index', compact('name', 'tasks'));
    }

    public function show($id)
    {
        $name = 'Alex';
        $task = App\Task::find($id);

        return view('tasks.show', compact('name', 'task'));
    }
}
