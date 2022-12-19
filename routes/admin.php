<?php

use Illuminate\Support\Facades\Route;



Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.dashboard')->middleware('IsAdmin');

//__Category Route__//
Route::get('admin/dashboard/category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
Route::get('admin/dashboard/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
Route::post('admin/dashboard/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
Route::get('admin/dashboard/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
Route::put('admin/dashboard/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
Route::get('admin/dashboard/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');

//__Subcategory Route__//
Route::get('admin/dashboard/subcategory/create', [App\Http\Controllers\Admin\SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('admin/dashboard/subcategory/store', [App\Http\Controllers\Admin\SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('admin/dashboard/subcategory/edit/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('admin/dashboard/subcategory/update/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'update'])->name('subcategory.update');
Route::get('admin/dashboard/subcategory/delete/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'delete'])->name('subcategory.delete');

//__Childcategory Route__//
Route::get('admin/dashboard/childcategory/create', [App\Http\Controllers\Admin\ChildcategoryController::class, 'create'])->name('childcategory.create');
Route::post('admin/dashboard/childcategory/store', [App\Http\Controllers\Admin\ChildcategoryController::class, 'store'])->name('childcategory.store');
Route::get('admin/dashboard/childcategory/edit/{id}', [App\Http\Controllers\Admin\ChildcategoryController::class, 'edit'])->name('childcategory.edit');
Route::put('admin/dashboard/childcategory/update/{id}', [App\Http\Controllers\Admin\ChildcategoryController::class, 'update'])->name('childcategory.update');
Route::get('admin/dashboard/childcategory/delete/{id}', [App\Http\Controllers\Admin\ChildcategoryController::class, 'delete'])->name('childcategory.delete');

//__Tag Route__//
Route::get('admin/dashboard/tag/index', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('tag.index');
Route::get('admin/dashboard/tag/create', [App\Http\Controllers\Admin\TagController::class, 'create'])->name('tag.create');
Route::post('admin/dashboard/tag/store', [App\Http\Controllers\Admin\TagController::class, 'store'])->name('tag.store');
Route::get('admin/dashboard/tag/edit/{id}', [App\Http\Controllers\Admin\TagController::class, 'edit'])->name('tag.edit');
Route::put('admin/dashboard/tag/update/{id}', [App\Http\Controllers\Admin\TagController::class, 'update'])->name('tag.update');
Route::get('admin/dashboard/tag/delete/{id}', [App\Http\Controllers\Admin\TagController::class, 'delete'])->name('tag.delete');

//__Post Route__//
Route::get('admin/dashboard/post/index', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.index');
Route::get('admin/dashboard/post/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('post.create');
Route::post('admin/dashboard/post/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('post.store');
Route::get('admin/dashboard/post/edit/{id}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('post.edit');
Route::put('admin/dashboard/post/update/{id}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('post.update');
Route::get('admin/dashboard/post/delete/{id}', [App\Http\Controllers\Admin\PostController::class, 'delete'])->name('post.delete');

//__JSON DATA SUBCATEGORY__//
Route::get('admin/dashboard/post/getsubcategory/{category_id}', [App\Http\Controllers\Admin\PostController::class, 'getSubcate']);
Route::get('admin/dashboard/post/getchildcategory/{subcategory_id}', [App\Http\Controllers\Admin\PostController::class, 'getChildcate']);
