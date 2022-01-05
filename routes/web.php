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

Route::get('postlists',"Postlists@list");
Route::get('dashboard', 'PostController@index');
Route::get('login', 'LoginController@login');
Route::get('approvedposts', 'PostController@approvedposts');
Route::get('deniedposts', 'PostController@deniedposts');
Route::get('category', 'CategoryController@category');
Route::get('posts', 'PostController@posts');