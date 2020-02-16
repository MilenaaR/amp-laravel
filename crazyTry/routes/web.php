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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function ($name = ['Marko', 'Janko', 'Petar']) {
    return $name;
})->middleware('passwordFilter');

Route::post('/students', function(Request $request) {
    return $request->all();
})->middleware('passwordFilter');

Route::patch('/students/{id}', function(Request $request) {
    return $request->all();
})->where('id', '[0-9]+')->middleware('passwordFilter');

Route::delete('/students/{id}', function ($id) {
    return 'Student ciji je ID: ' . $id . ' je obrisan!';
})->where('id', '[0-9]+')->middleware('passwordFilter');
