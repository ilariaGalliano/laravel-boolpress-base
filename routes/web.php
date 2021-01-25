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

// Static page controller 

// Home
Route::get('/', 'StaticPageController@home')->name('homepage');
//About
Route::get('/about', 'StaticPageController@about')->name('about');

/**
 * Post resource pages (CRUD)
 */
Route::resource('posts', 'PostController');