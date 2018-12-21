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
//Login
Route::get('/', function () {
    return view('auth/login');
});

//Auth
Auth::routes();

//Admin
Route::get('/admin', 'AdminController@dashboard');


//User
Route::get('/user', 'UserController@dashboard');