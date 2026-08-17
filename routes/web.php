<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/3d', function () {
    return view('pages.home-3d');
})->name('home.3d');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');