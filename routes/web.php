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

//TODO: Change this to use the controller function

Route::get('/recipes', 'recipesController@index');

Auth::routes();
Route::post('/recipe/submit', 'RecipesController@store');