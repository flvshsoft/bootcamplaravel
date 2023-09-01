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

Route::get('/siswa', 'App\Http\Controllers\SiswaController@index');
Route::get('/add', 'App\Http\Controllers\SiswaController@add');
Route::post('/store', 'App\Http\Controllers\SiswaController@store');
Route::get('/siswa/edit/{id}', 'App\Http\Controllers\SiswaController@edit');
Route::post('/update', 'App\Http\Controllers\SiswaController@update');
Route::get('/siswa/delete/{id}', 'App\Http\Controllers\SiswaController@destroy');

// Login
Route::get('/', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/register', 'App\Http\Controllers\LoginController@register');
Route::post('/register', 'App\Http\Controllers\LoginController@create');