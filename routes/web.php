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

Route::get('tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('tasks/create', 'TaskController@store');

Route::get('tasks/{id}/edit', 'TaskController@edit')->name('tasks.edit');
Route::post('tasks/{id}/edit', 'TaskController@update');

Route::get('tasks/{id}/delete', 'TaskController@delete')->name('tasks.delete');