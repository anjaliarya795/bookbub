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

Route::view("/", "home" );

Route::view("/about", "about");

Route::view("/book1", "book1");

Route::view("/book2", "book2");

Route::view("/book3", "book3");

Route::view("/book4", "book4");
