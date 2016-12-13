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

Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', 'UserController@dashboard');
    Route::get('me', 'UserController@me');
    Route::get('notifikasi', 'UserController@notifikasi');
    Route::get('notifikasi/hapus/{id}', 'UserController@hapusNotifikasi');
    Route::get('notifikasi/baca/{id}', 'UserController@bacaNotifikasi');

    Route::group(['middleware' => 'role:admin'], function() {
        Route::get('/admin', 'AdminController@index');
        Route::get('/post/admin', 'PostController@admin');
        Route::get('/post/{post}/draft', 'PostController@draft');
        Route::get('/post/{post}/publish', 'PostController@publish');
        Route::get('/post/{post}/archive', 'PostController@archive');
        Route::get('/user/admin', 'UserController@admin');
        Route::get('/user/{user}/verify', 'UserController@verify');
        Route::get('/user/{user}/activate', 'UserController@activate');
        Route::get('/user/{user}/deactivate', 'UserController@deactivate');
        Route::resource('post', 'PostController', ['except' => ['index', 'show']]);
        Route::resource('user', 'UserController', ['except' => ['index', 'show']]);
    });

});

Route::get('/', 'HomeController@index');
Route::get('/artikel', 'PostController@artikel');
Route::get('/video', 'PostController@video');
Route::get('/home', 'HomeController@index');
Route::resource('post', 'PostController', ['only' => ['index', 'show']]);
Route::resource('user', 'UserController', ['only' => ['index', 'show']]);
Route::resource('biodata', 'BiodataController');
