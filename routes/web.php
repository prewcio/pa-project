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
Route::get('/login', function () {
    return view('logreg');
});
Route::get('/register', function () {
    return view('logreg');
});

Route::get('/{user}', 'App\Http\Controllers\AccountController@ExerTest');

Route::get('/{user}/exercise', 'App\Http\Controllers\AccountController@ExerTest');

Route::get('/{user}/test', 'App\Http\Controllers\AccountController@ExerTest');
