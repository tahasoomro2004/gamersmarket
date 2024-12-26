<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreownedController;
use App\Http\Controllers\ProductsController;

use App\Http\Controllers\AdminProductsController;


Route::get('/admin/products', [AdminController::class, 'index'])->name('admin.dashboard');

// Correcting to Route::get()
Route::get('/', [HomeController::class, 'index']);
Route::get('/preowned', [PreownedController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

Route::prefix('admin')->group(function () {
    Route::get('/products', [AdminProductsController::class, 'index'])->name('admin.products.index');
    Route::post('/products', [AdminProductsController::class, 'store'])->name('admin.products.store');
    Route::put('/products/{id}', [AdminProductsController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [AdminProductsController::class, 'destroy'])->name('admin.products.destroy');
});
