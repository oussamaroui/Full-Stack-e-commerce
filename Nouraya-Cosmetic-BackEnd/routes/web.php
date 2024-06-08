<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-product', function(){
    return view('dashboard.addProduct');
});

Route::get('/', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/products', [ProductController::class, 'products'])->name('products.products');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/basket', [BasketController::class, 'indexWeb'])->name('products.basket');
