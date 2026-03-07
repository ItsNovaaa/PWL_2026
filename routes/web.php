<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'foodbeverage'])->name('foodbeverage');
    Route::get('beautyhealth', [CategoryController::class, 'beautyhealth'])->name('beautyhealth');
    Route::get('home', [CategoryController::class, 'home'])->name('home');
    Route::get('babykid', [CategoryController::class, 'babykid'])->name('babykid');
    Route::get('penjualan', [CategoryController::class, 'penjualan'])->name('penjualan');
});

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return view('user.profile', compact('id', 'name'));
});

Route::get('/transaksi/{id}', function ($id) {
    return view('transaksi.detail', compact('id'));
});