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

/** 
 * https://laravel.com/docs/9.x/routing#redirect-routes
 * Basic Routing
 * 
 * */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return "This is about us url";
});

Route::get('/contact-us', function () {
    return "This is contact-us url";
});