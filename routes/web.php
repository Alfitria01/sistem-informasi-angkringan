<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Homepage route
Route::get('/', function () {
    return view('home'); // Menampilkan homepage
});

// Resource route for products (CRUD)
Route::resource('products', ProductController::class); // CRUD untuk produk
