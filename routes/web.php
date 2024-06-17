<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\OrderReportController;
use App\Http\Controllers\WebsiteProfileController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', [DashboardController::class, 'index'])->name('home')->middleware('role:admin');
    Route::resource('admin/category', CategoryController::class)->middleware('role:admin');
    Route::resource('admin/catalogue', CatalogueController::class)->middleware('role:admin');
    Route::get('/admin/order', [OrderController::class, 'index'])->name('order.index')->middleware('role:admin');
    Route::get('/admin/order/create', [OrderController::class, 'create'])->name('order.create')->middleware('role:admin');
    Route::post('/admin/order/store', [OrderController::class,'store'])->name('order.store')->middleware('role:admin');
    Route::get('/admin/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit')->middleware('role:admin');
    Route::put('/admin/order/update/{id}', [OrderController::class, 'update'])->name('order.update')->middleware('role:admin');
    Route::delete('/admin/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy')->middleware('role:admin');
    Route::resource('admin/settings', WebsiteProfileController::class)->middleware('role:admin');
    Route::resource('admin/order-report', OrderReportController::class)->middleware('role:admin');
});
