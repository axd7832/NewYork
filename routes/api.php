<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| * Anything Route added to the file will be URL/api/ROUTE_NAME
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/getAll','UserController@getAll');
Route::get('user/{id}','UserController@getOne');
Route::post('user','UserController@store');
Route::delete('user','UserController@delete');

Route::get('company/getAll', 'CompanyController@getAll');
Route::get('company/{id}', 'CompanyController@getOne');
Route::post('company/create', 'CompanyController@store');
Route::delete('company/{id}', 'CompanyController@delete');

Route::get('api/user/getAll', 'UserController@getAll');
Route::get('api/user/{id}', 'UserController@getOne');
Route::post('api/user/create', 'UserController@store');
Route::delete('api/user/{id}', 'UserController@delete');

Route::get('workflow/getAll', 'WorkflowController@getAll');
Route::get('workflow/{id}', 'WorkflowController@getOne');
Route::post('workflow/create', 'WorkflowController@store');
Route::delete('workflow/{id}', 'WorkflowController@delete');

Route::get('milestone/getAll','MilestoneController@getAll');
Route::get('milestone/{id}','MilestoneController@getOne');
Route::post('milestone','MilestoneController@store');
Route::delete('milestone','MilestoneController@delete');

// Route::get('api/document','DocumentController@getOne');
// Route::get('api/document/{id}','DocumentController@getAll');
// Route::post('api/milestone','DocumentController@store');
// Route::delete('api/milestone','DocumentController@delete');