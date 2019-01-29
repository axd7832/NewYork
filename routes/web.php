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

Route::get('api/company/getAll', 'CompanyController@getAll');
Route::get('api/company/{id}', 'CompanyController@getOne');
Route::post('api/company', 'CompanyController@store');
Route::delete('api/company/{id}', 'CompanyController@delete');

// Wildcard Routes for Vue Router
Route::get('/{any}', 'VueController@index')->where('any', '.*');