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

Route::get('/', 'HomeController@welcome');
Route::get('/register', 'AuthController@daftar');
Route::get('/biodata', 'AuthController@biodata');
Route::post('/biodata', 'AuthController@biodata_post');