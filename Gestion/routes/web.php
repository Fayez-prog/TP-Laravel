<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TemplateController::class, 'index'])->name('index');
Route::get('/login', [TemplateController::class, 'login'])->name('login');
Route::get('/mail', [TemplateController::class, 'mail'])->name('mail');
Route::get('/products', [TemplateController::class, 'products'])->name('products');
Route::get('/furniture', [TemplateController::class, 'furniture'])->name('furniture');
Route::get('/checkout', [TemplateController::class, 'checkout'])->name('checkout');
Route::get('/register', [TemplateController::class, 'register'])->name('register');
Route::get('/short-codes', [TemplateController::class, 'short'])->name('short-codes');
Route::get('/single', [TemplateController::class, 'single'])->name('single');

//Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/category/{id}', [CategoryController::class, 'products'])
    ->where('id', '[0-9]+')
    ->name('category.products');

    Route::middleware('auth')->prefix('new')->group(function() {
    Route::get('/product', [ProductController::class, 'new'])->name('product.new');
    Route::post('/product', [ProductController::class, 'add'])->name('product.add');
    Route::get('/category', [CategoryController::class, 'new'])->name('category.new');
    Route::post('/category', [CategoryController::class, 'add'])->name('category.add');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

