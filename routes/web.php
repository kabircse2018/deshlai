<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Post Route
Route::get('/category/{id}', [App\Http\Controllers\Frontend\SinglePostController::class, 'singlePost'])->name('post.single');

