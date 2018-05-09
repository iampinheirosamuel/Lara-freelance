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


Auth::routes();

Route::get('/', 'PostController@home')->name('home');

Route::get('/posts', 'PostController@index');

Route::get('profile/{id}', 'PostController@updateUser');


Route::resource('users', 'UserController');

Route::get('/verified-profile/{id}', 'PostController@showUser');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');