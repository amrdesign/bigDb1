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

Route::get('/', function () {
    return view('welcome');
});

Route::get('read')->uses('EmployeesController@index')->name('table.index');
Route::get('getTable')->uses('EmployeesController@getTable')->name('table.gettable');

Route::get('post')->uses('PostsController@index')->name('post.index');
Route::get('getPost')->uses('PostsController@getTable')->name('post.gettable');
