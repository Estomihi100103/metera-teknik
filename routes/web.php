<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\OtherServiceController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/search', [HomeController::class, 'searchProduct'])->name('products.search');
Route::get('/autocomplete', [HomeController::class, 'autocomplete'])->name('products.autocomplete');
Route::get('/product', [ProductController::class, 'index'])->name('product.products');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('show.product');
Route::get('/live-search', [ProductController::class, 'searchCategory'])->name('live.search');
Route::get('/category', [CategoryController::class, 'index'])->name('category.categories');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact.index');
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery.index');
Route::get('/calibration',[OtherServiceController::class, 'calibration'])->name('service.calibration');

