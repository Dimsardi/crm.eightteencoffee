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

Auth::routes();

// home
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('home.admin')->middleware('previlage_user');
Route::get('kasir/home', [App\Http\Controllers\HomeController::class, 'kasirHome'])->name('home.kasir')->middleware('previlage_user');
Route::get('weather/home', [App\Http\Controllers\HomeController::class, 'weatherHome'])->name('home.weather')->middleware('previlage_user');
Route::get('kichen/home', [App\Http\Controllers\HomeController::class, 'kichenHome'])->name('home.kichen')->middleware('previlage_user');
Route::get('barista/home', [App\Http\Controllers\HomeController::class, 'baristaHome'])->name('home.barista')->middleware('previlage_user');

// menu makanan