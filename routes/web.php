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
    Route::get('/home', [DashboardController::class, 'index'])->name('home')->middleware('role:admin');
    Route::resource('category', CategoryController::class)->middleware('role:admin');
    Route::resource('catalogue', CatalogueController::class)->middleware('role:admin');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index')->middleware('role:admin');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create')->middleware('role:admin');
    Route::post('/order/store', [OrderController::class,'store'])->name('order.store')->middleware('role:admin');
    Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit')->middleware('role:admin');
    Route::put('/order/update/{id}', [OrderController::class, 'update'])->name('order.update')->middleware('role:admin');
    Route::delete('/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy')->middleware('role:admin');
    Route::resource('settings', WebsiteProfileController::class)->middleware('role:admin');
    Route::resource('order-report', OrderReportController::class)->middleware('role:admin');
});
