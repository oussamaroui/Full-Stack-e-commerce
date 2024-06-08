<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/products', [ProductController::class, 'productsAPI']);

Route::get('/baskets', [BasketController::class, 'index']);
Route::post('/baskets', [BasketController::class, 'addToBasket']);
Route::delete('/baskets/{id}', [BasketController::class, 'destroy']);

