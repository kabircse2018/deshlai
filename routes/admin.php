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
