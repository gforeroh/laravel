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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('monedas', 'CbCurrencyController');
Route::resource('discussion', 'DiscussionController');
Route::resource('cars', 'CarController');
Route::resource('crud', 'CRUDController');