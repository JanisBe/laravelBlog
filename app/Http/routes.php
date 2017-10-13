<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Task;
Route::get('/', function () {
$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});



Route::get('/tasks/{id}', function ($id) {
$task = Task::find($id);
    return view('tasks.task', compact('task'));
});
