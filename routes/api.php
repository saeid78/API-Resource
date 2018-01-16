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
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get
Route::get('customers', 'CustomerController@index');

//show
Route::get('customer/{id}', 'CustomerController@show');

Route::post('customer', 'CustomerController@store');

Route::put('customer/{id}', 'CustomerController@update');

Route::delete('customer/{id}', 'CustomerController@destroy');
