<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route untuk generate QR Code
Route::match(['get', 'post'], '/qr-code', [QrCodeController::class, 'generate'])->name('qr-code');

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Halaman utama atau welcome page
Route::get('/', function () {
    return view('welcome'); // Menampilkan welcomepage
});

// Otentikasi routes (login, logout, register)
Auth::routes();

// Custom routes for UserController registration and profile
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');

// Routes for login and logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Cart routes
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Transaction routes
Route::post('/transactions', [TransactionController::class, 'createTransaction'])->name('transactions.create');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');

// Route untuk halaman Home setelah login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route untuk CRUD Produk
Route::resource('products', ProductController::class); // CRUD untuk produk

// Rute untuk menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index'); // Halaman daftar kategori/menu
Route::get('/menu/{category}', [MenuController::class, 'detail'])->name('menu.show'); // Detail menu berdasarkan kategori

// Routes for About and Contact pages
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route for Sales Report
Route::get('/sales-report', [SalesReportController::class, 'index'])->name('sales.report');
