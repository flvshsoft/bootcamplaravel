<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', 'App\Http\Controllers\SiswaController@index');
Route::get('/add', 'App\Http\Controllers\SiswaController@add');
Route::post('/store', 'App\Http\Controllers\SiswaController@store');
Route::get('/siswa/delete/{id}', 'App\Http\Controllers\SiswaController@destroy');