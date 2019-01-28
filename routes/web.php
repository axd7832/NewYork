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

// Browser Routes
Route::get('', 'VueController@index')->name('vue');

// Wildcard Routes for Vue Router
Route::get('/{any}', 'VueController@index')->where('any', '.*');