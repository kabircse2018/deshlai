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
