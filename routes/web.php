<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if(Auth::check()){
        return redirect()->route('home') ; 
    }
    else{
        return redirect()->route('login') ; 
    }
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product/single-product/{id}', [ProductController::class, 'singleProduct'])->name('product.single');
Route::post('/product/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addtocart');
