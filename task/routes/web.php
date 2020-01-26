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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','TaskController@index');

//u taskcontroleru stvori fun koja sprema podatke kad se napravi neki novi unos
Route::post('/task/create', 'TaskController@store')->name('task.create');

//{task} predstavlja ID
Route::delete('/task/delete/{task}', 'TaskController@destroy')->name('task.delete');