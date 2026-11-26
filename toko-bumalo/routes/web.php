<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bumalo.index');
})->name('home');

Route::get('/about', function () {
    return view('bumalo.about');
})->name('about');

Route::get('/products', function () {
    return view('bumalo.products');
})->name('products');

Route::get('/product-detail', function () {
    return view('bumalo.single-product');
})->name('product.detail');

Route::get('/contact', function () {
    return view('bumalo.contact');
})->name('contact');