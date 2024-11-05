<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'homePage'])->name('home');

Route::get('/category/{id}', [CategoryController::class, 'categoryPage'])->name('category');

Route::get('/post/{id}', [PostController::class, 'postDetailPage'])->name('postDetail');

Route::get('/writers', [UserController::class, 'writersPage'])->name('writers');

Route::get('/writers/{id}', [UserController::class, 'writersDetailPage'])->name('writersDetail');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/popular', [PostController::class, 'popularPage'])->name('popular');
