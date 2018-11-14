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

//Front-end Routes *** Editable for Front-End ***
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');


//Auth Routes *** DON'T DELETE ****
Auth::routes();

// Administration Routes
//Set prefix for administration area
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdministrationControllers\UserController@home');
    //Users Routes
    Route::get('/users/search', 'AdministrationControllers\UserController@search')->name('users.search');
    Route::resource('users', 'AdministrationControllers\UserController');
    //Themes Routes
    Route::resource('themes', 'AdministrationControllers\ThemeController');
    //Posts Routes
    Route::resource('posts', 'AdministrationControllers\PostController');
});
