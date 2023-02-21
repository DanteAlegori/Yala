<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/where', [App\Http\Controllers\AllController::class, 'where'])->name('where');

Route::get('/catalog/product/{id?}', [App\Http\Controllers\CatalogController::class, 'product'])->name('catalog.product');

Route::get('/catalog/product/detail/{id}', [App\Http\Controllers\CatalogController::class, 'detail'])->name('catalog.one-product');

Route::get('/', [App\Http\Controllers\AllController::class, 'main'])->name('main');



Route::middleware(['auth'])->group(function(){

Route::get('/user-panel/user', [App\Http\Controllers\UserPanelController::class, 'user'])->name('user');

Route::get('/basket/basket', [App\Http\Controllers\BasketController::class, 'basket'])->name('basket');

});


Route::middleware(['admin'])->group(function() {

    Route::get('/admin-panel/admin', [App\Http\Controllers\AdminPanelController::class, 'admin'])->name('admin-panel.admin');

    Route::view('/admin-panel/create-product', 'admin-panel.create-product')->name('create-product');

    Route::post('/admin-panel/create-product', [App\Http\Controllers\AdminPanelController::class, 'create'])->name('admin-panel.create-product');

    Route::get('/admin-panel/catalog-from-delete/{id?}', [App\Http\Controllers\AdminPanelController::class, 'catalog'])->name('admin-panel.catalog');

    Route::get('/admin-panel/update-product/{id}',[App\Http\Controllers\AdminPanelController::class, 'updatePage'])->name('admin-panel.update-productt');

    Route::post('/admin-panel/update-product', [App\Http\Controllers\AdminPanelController::class, 'updateProduct'])->name('admin-panel.update-product');

    Route::get('/admin-panel/delete-product/{id}', [App\Http\Controllers\AdminPanelController::class, 'product'])->name('admin-panel.delete-product');

    Route::get('/admin-panel/delete/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete'])->name('delete');
});

Route::get('/logout', [App\Http\Controllers\logoutController::class, 'logout'])->name('logoutProcess');

Route::get('/about/{id?}', [App\Http\Controllers\CatalogController::class, 'about'])->name('about');



