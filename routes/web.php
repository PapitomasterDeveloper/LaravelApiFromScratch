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

// List articles endpoint
Route::get('articles', 'ArticlesController@index');

// List a single article endpoint
Route::get('article/{id}', 'ArticleController@show');

// Create a new article endpoint
Route::post('article', 'ArticleController@store');

// Update article endpoint
Route::put('articles', 'ArticleController@store');

// Delete article endpoint
Route::delete('articles', 'ArticleController@destroy');
