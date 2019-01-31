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


Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


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

Route::get('api/milestone/getAll','MilestoneController@getOne');
Route::get('api/milestone/{id}','MilestoneController@getAll');
Route::post('api/milestone','MilestoneController@store');
Route::delete('api/milestone','MilestoneController@delete');

// Route::get('api/document','DocumentController@getOne');
// Route::get('api/document/{id}','DocumentController@getAll');
// Route::post('api/milestone','DocumentController@store');
// Route::delete('api/milestone','DocumentController@delete');





// Basic Get Route
// Route::get('api/path-to-resource','Controller-That-Returns-A-Resource');

// Wildcard Routes for Vue Router
Route::get('/{any}', 'VueController@index')->where('any', '.*');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
