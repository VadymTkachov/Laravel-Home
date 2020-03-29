<?php

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

// Homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

/*
Route::get('/tasks', function () {
    $name = 'John';
//    $tasks = DB::table('tasks')->get();
//    $tasks = App\Task::all();
    $tasks = App\Task::incomplete();

    return view('tasks.index', compact('name', 'tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $name = 'Tereodor';
//    $task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);

    return view('tasks.show', compact('name', 'task'));
});
*/
