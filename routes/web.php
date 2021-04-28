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

/* ---------- Start of Todos ---------- */

Route::get('/todos', 'TodosController@index');
Route::get('/todos/{todo}', 'TodosController@show');
Route::get('/todos/create', 'TodosController@create');
Route::post('/todos', 'TodosController@store');
Route::get('/todos/{todo}/edit', 'TodosController@edit');
Route::put('/todos/{todo}/update', 'TodosController@update');
Route::delete('/todos/{todo}/delete', 'TodosController@destroy');
Route::get('/todos/{todo}/complete', 'TodosController@complete');

/* ---------- End of Todos ---------- */
