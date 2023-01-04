<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/post/{id}/{subcategory_slug}', [App\Http\Controllers\Frontend\PostController::class, 'ViewSubcategory'])->name('ViewSubcategory');

//__Search by post URL__//
Route::get('/archive/search', [App\Http\Controllers\Frontend\SearchController::class, 'Search'])->name('search');

//__Author by post URL__//
Route::get('/author/{author_custom_post_id}', [App\Http\Controllers\Frontend\PostController::class, 'AuthorByPost'])->name('author');

