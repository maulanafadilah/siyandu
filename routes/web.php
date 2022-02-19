<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalitaDataController;
use App\Models\Balita;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KehadiranDataController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'App\Http\Controllers\SiyanduController@index')->middleware('auth');

Route::resource('/balita', BalitaDataController::class)->middleware('auth');
Route::resource('/kehadiran', KehadiranDataController::class)->middleware('auth');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

Route::get('/register', 'App\Http\Controllers\RegisterController@index')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');