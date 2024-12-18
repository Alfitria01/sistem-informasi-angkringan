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
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\SPKController;
use App\Http\Controllers\PelangganController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\PostController;

// Route untuk generate QR Code
Route::match(['get', 'post'], '/qr-code', [QrCodeController::class, 'generate'])->name('qr-code');

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Halaman utama atau welcome page
Route::get('/welcome', function () {
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

Route::middleware([RoleMiddleware::class . 'admin'])->group(function () {
    Route::get('/edit-post/{post}',[PostController::class, 'showEditScreen']);
    Route::put('edit-post/{post}',[PostController::class, 'actuallyUpdatePost']);

});

Route::middleware([RoleMiddleware::class . ':admin,user'])->group(function () {
    Route::post('/create-post', [PostController::class,'createPost']);
});

// Cart routes
Route::prefix('cart')->group(function() {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('add', [CartController::class, 'add'])->name('cart.add');
    Route::put('update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});

// Transaction routes
Route::post('/transactions', [TransactionController::class, 'createTransaction'])->name('transactions.create');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

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

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

Route::resource('bahan_baku', BahanBakuController::class);

Route::get('/spk/calculate', [SPKController::class, 'calculateSAW'])->name('spk.calculate');
Route::get('/spk', [SPKController::class, 'index']);

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index'); // Displays the filter form
Route::get('/pelanggan/filter', [PelangganController::class, 'filter'])->name('pelanggan.filter'); // Processes the filter

