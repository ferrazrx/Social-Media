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
Route::get('/home', 'HomeController@index')->name('home');


// Administration Routes
//Define resources Routes
    //Auth Routes
Auth::routes();
    //Users Routes
Route::get('/users/search', 'UserController@search')->name('users.search');
Route::resource('users', 'UserController');
    //Themes Routes
Route::resource('themes', 'ThemeController');
    //Posts Routes
Route::resource('posts', 'PostController');

