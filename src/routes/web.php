<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// 商品登録（フォーム表示＆処理）
Route::get('/products/detail', [ProductController::class, 'detail'])->name('products.detail');

// 商品登録（フォーム表示＆処理）
Route::get('/products/register', [ProductController::class, 'register'])->name('products.register');