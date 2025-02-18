<?php

use Illuminate\Support\Facades\Route;

// localhost:8000/
Route::get('/', function () {
    return view('index');     // resources/views/welcome.blade.php
})->name('home');
// localhost:8000/product    // products
Route::get('/products', function () {
    return view('product');     // resources/views/product.blade.php
})->name('product');

Route::get('/contact', function () {

    return view('contact');
})->name('contact');