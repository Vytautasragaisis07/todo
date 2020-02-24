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

Auth::routes();

Route::get('/home', 'TaskController@controlTasks')->name('home');

Route::get('/prideti', 'TaskController@prideti');
Route::POST('/prideti-task', 'TaskController@pridetiTask');

