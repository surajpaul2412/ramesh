<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;

// Public Route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/product-detail', [ProductController::class, 'show1'])->name('product.detail');


// Fallback route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

// Admin Routes
Route::middleware(['isAdmin'])->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Customer Routes
Route::middleware(['isCustomer'])->group(function () {
    // Customer Dashboard
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
});

// Profile Routes (Common for All Authenticated Users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes (Laravel Breeze, Jetstream, or Fortify)
require __DIR__.'/auth.php';
