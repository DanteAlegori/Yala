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

Route::view('/', 'main')->name('main');

Route::get('/about', [App\Http\Controllers\AllController::class, 'about'])->name('about');

Route::get('/where', [App\Http\Controllers\AllController::class, 'where'])->name('where');

Route::get('/catalog', [App\Http\Controllers\AllController::class, 'catalog'])->name('catalog');

Route::get('/item', [App\Http\Controllers\AllController::class, 'item'])->name('item');

Auth::routes();

Route::get('/logout', [App\Http\Controllers\logoutController::class, 'logout'])->name('logoutProcess');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
