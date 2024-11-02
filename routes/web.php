<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/category/{name}', function ($name) {
    return view('category', ['name' => $name]);
})->name('category');

Route::get('/writers', function () {
    return view('writers');
})->name('writers');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/popular', function () {
    return view('popular');
})->name('popular');
