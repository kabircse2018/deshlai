<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Post Route
// Route::get('/post/{post_slug}', [App\Http\Controllers\Frontend\SinglePostController::class, 'singlePost'])->name('post.single');
Route::get('/post/{category_slug}', [App\Http\Controllers\Frontend\PostController::class, 'viewCategory'])->name('post.category');
// Route::get('/post/{category_slug}/{subcategory_slug}', [App\Http\Controllers\Frontend\PostController::class, 'viewSubcategory'])->name('post.subcategory');
Route::get('/{post_slug}', [App\Http\Controllers\Frontend\PostController::class, 'viewPost'])->name('viewpost');
Route::get('/posts/{id}/{subcategory_slug}', [App\Http\Controllers\Frontend\PostController::class, 'ViewSubcategory'])->name('ViewSubcategory');
