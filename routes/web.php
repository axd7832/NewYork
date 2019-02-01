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

Route::get('api/user/getAll', 'UserController@getAll');
Route::get('api/user/{id}', 'UserController@getOne');
Route::post('api/user', 'UserController@store');
Route::delete('api/user/{id}', 'UserController@delete');

// Route::get('api/workflow/getAll', 'WorkflowController@getAll');
// Route::get('api/workflow/{id}', 'WorkflowController@getOne');
// Route::post('api/workflow/{id}', 'WorkflowController@getOne');
// Route::delete('api/workflow/{id}', 'WorkflowController@delete');

Route::get('api/milestone/getAll','MilestoneController@getAll');
Route::get('api/milestone/{id}','MilestoneController@getOne');
Route::post('api/milestone','MilestoneController@store');
Route::delete('api/milestone','MilestoneController@delete');

// Route::get('api/document','DocumentController@getOne');
// Route::get('api/document/{id}','DocumentController@getAll');
// Route::post('api/milestone','DocumentController@store');
// Route::delete('api/milestone','DocumentController@delete');

// Basic Get Route
// Route::get('api/path-to-resource','Controller-That-Returns-A-Resource');




// Login / Logout Routes
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::get('logout', 'Auth\LoginController@logout');

// Password Reset Routes
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/reset', ['as' => '', 'uses' => 'Auth\ResetPasswordController@reset']);
Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
// Wildcard Routes for Vue Router
Route::get('/{any}', 'VueController@index')->where('any', '.*');
Auth::routes();