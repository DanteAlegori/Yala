<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
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

Route::get('/catalog/product/{id?}', [App\Http\Controllers\CatalogController::class, 'product'])->name('catalog.product');

Auth::routes();

Route::get('/logout', [App\Http\Controllers\logoutController::class, 'logout'])->name('logoutProcess');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
