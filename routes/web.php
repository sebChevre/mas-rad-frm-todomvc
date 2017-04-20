<?php

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

<<<<<<< HEAD
Route::get('/tasks','TasksController@index');

Route::get('/tasks/{id}','TasksController@show')->name('tasks.show');
=======
Route::get('tasks', function () {
    return view('welcome.blade');
});
>>>>>>> ba54378b70b70a7f49e5a6f70cc815a4a3dd166f
