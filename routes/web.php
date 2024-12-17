<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreownedController;
use App\Http\Controllers\ProductsController;

// Correcting to Route::get()
Route::get('/', [HomeController::class, 'index']);
Route::get('/preowned', [PreownedController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
