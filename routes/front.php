<?php

use App\Http\Controllers\Front\CartItmController;
use App\Http\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('product/{productId}', [ProductController::class, 'show'])->name('cart.show');

Route::get('cart', [CartItmController::class, 'index'])->name('cart.index');
Route::middleware('checkQuntityProduct')->post('cart', [CartItmController::class, 'store'])->name('cart.post');
Route::put('cart/{cartId}', [CartItmController::class, 'updated'])->name('cart.put');
Route::delete('cart/{cartId}', [CartItmController::class, 'deleted'])->name('cart.delete');
