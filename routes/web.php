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
    return view('index');
});


Route::get('login', 'AuthController@index');
Route::post('post_login', 'AuthController@post_login');

Route::get('items', 'AuthController@dashboard');

Route::get('logout', 'AuthController@logout');

Route::get('items/{id}', 'ItemController@update');
Route::post('post_update', 'ItemController@post_update');
Route::get('new', 'ItemController@new');
Route::post('post_new', 'ItemController@post_new');
Route::get('delete/{id}', 'ItemController@delete');


