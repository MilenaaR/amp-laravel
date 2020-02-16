<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('hotels', 'HotelsController@index');
Route::post('hotels', 'HotelsController@store');
Route::get('hotels/{hotel}', 'HotelsController@show');
Route::put('hotels/{hotel}', 'HotelsController@update');
Route::delete('hotels/{hotel}', 'HotelsController@delete');

Route::get('countries', 'CountriesController@index');
Route::post('countries', 'CountriesController@store');
Route::get('countries/{country}', 'CountriesController@show');
Route::put('countries/{country}', 'CountriesController@update');
Route::delete('countries/{country}', 'CountriesController@delete');
