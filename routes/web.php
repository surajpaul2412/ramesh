<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

// Public Route
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/privacy-policy', function () { return view('privacy-policy'); })->name('privacy-policy');
Route::get('/return-policy', function () { return view('return-policy'); })->name('return-policy');
Route::get('/term-conditions', function () { return view('term-conditions'); })->name('term-conditions');
Route::get('/contact-us', function () { return view('contact'); })->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/category/{slug}', [ShopController::class, 'category'])->name('category');
Route::get('/type/{slug}', [ShopController::class, 'type'])->name('type');
// Route::get('/shop/{category?}', [ShopController::class, 'index'])->name('shop');
// Route::get('/shop/{id}', [ProductController::class, 'details'])->name('shop.details');

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.detail');
// Route::get('/product-detail', [ProductController::class, 'show1'])->name('product.detail');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

// Fallback route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

// Admin Routes
Route::middleware(['isAdmin'])->prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/types', [TypeController::class, 'index'])->name('admin.types.index');
    Route::get('/types/create', [TypeController::class, 'create'])->name('admin.types.create');
    Route::post('/types', [TypeController::class, 'store'])->name('admin.types.store');
    Route::get('/types/{type}/edit', [TypeController::class, 'edit'])->name('admin.types.edit');
    Route::put('/types/{type}', [TypeController::class, 'update'])->name('admin.types.update');
    Route::delete('/types/{type}', [TypeController::class, 'destroy'])->name('admin.types.destroy');

    Route::resource('/categories', CategoryController::class)->except(['show']);
    Route::resource('/subcategories', SubCategoryController::class);

    Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
});

// Customer Routes
Route::middleware(['isCustomer'])->group(function () {
    // Customer Dashboard
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
});

Route::middleware('auth')->group(function () {
    // Wishlist
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{product}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{product}', [WishlistController::class, 'remove'])->name('wishlist.remove');

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

    // Checkout
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/checkout', [CartController::class, 'processCheckout'])->name('cart.processCheckout');

    // Address
    Route::post('/address/store', [AddressController::class, 'store'])->name('address.store');
    Route::delete('/address/remove/{id}', [AddressController::class, 'remove'])->name('address.remove');
});

// Profile Routes (Common for All Authenticated Users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes (Laravel Breeze, Jetstream, or Fortify)
require __DIR__.'/auth.php';
