<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes
Route::get('/products', [ProductController::class, 'index'])->name('index');

Route::get('/products/create', [ProductController::class, 'create'])->name('create');

Route::post('/products/store', [ProductController::class, 'store'])->name('store');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('show');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('edit');

Route::patch('/products/{product}/update', [ProductController::class, 'update'])->name('update');

Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('destroy');
