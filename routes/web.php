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


Route::get('/test', function(){
   return App\User::find(2)->task;
});

Auth::routes();

Route::get('/', 'PostController@home')->name('home');

Route::get('/posts', 'PostController@index');

Route::resource('users', 'UserController');

Route::get('/verified-profile/{id}', 'PostController@showUser');

Route::resource('roles', 'RoleController');

Route::resource('profile', 'ProfileController');

Route::post('/profile/update/{id}',[
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
]);

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::resource('task', 'TaskController');

Route::post('/posts/create',[
    'uses' => 'PostController@store',
    'as' => 'posts.store'
]);
