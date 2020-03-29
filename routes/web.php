<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $name  = 'John';
    $tasks = DB::table('tasks')->get();

    return view('tasks.index', compact('name', 'tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $name  = 'Tereodor';
    $task = DB::table('tasks')->find($id);

    return view('tasks.show', compact('name', 'task'));
});
