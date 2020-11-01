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

Route::get('/students','App\Http\Controllers\StudentController@index');
Route::get('/create','App\Http\Controllers\StudentController@create');
Route::post('/students','App\Http\Controllers\StudentController@store');
Route::get('/students/search','App\Http\Controllers\StudentController@search');
Route::get('/studentsedit/{studentID}','App\Http\Controllers\StudentController@edit');
Route::post('/studentsedit/{studentID}','App\Http\Controllers\StudentController@update');
Route::get('/students/{studentID}','App\Http\Controllers\StudentController@show');
Route::delete('/students/{studentID}','App\Http\Controllers\StudentController@destroy');

// Route::PATCH('/studentsedit/{studentID}','App\Http\Controllers\StudentController@update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');