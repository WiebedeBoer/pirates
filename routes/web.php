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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//forum
Route::get('/forum', 'ForumController@index');

//news
Route::get('/news', 'NewsController@index');
Route::get('/news/rules', 'NewsController@rules');
Route::get('/news/terms', 'NewsController@terms');
Route::get('/news/privacy', 'NewsController@privacy');
