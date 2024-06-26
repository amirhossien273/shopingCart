<?php

use App\Http\Controllers\manage\CategoryController;
use App\Http\Controllers\Manage\ProductController;
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

Route::get('/category', [CategoryController::class, "index"])->name('category.index');

Route::get('/product', [ProductController::class, "create"])->name('product.create');
Route::post('/product', [ProductController::class, "store"])->name('product.store');
