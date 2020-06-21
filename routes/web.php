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

Route::get('todo','TodoController@index');
Route::get('todo/{todo}','TodoController@show');
Route::get('todo/{todo}/edit','TodoController@edit');
Route::get('todo/{todo}/completed','TodoController@completed');
Route::get('todo/{todo}/incomplete','TodoController@incomplete');
Route::get('todo/{todo}/delete','TodoController@delete');
Route::get('create','TodoController@create');
Route::post('store-todo','TodoController@store');
Route::post('todo/{todo}/update-todo','TodoController@update');
