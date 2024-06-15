<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('pages.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home')->middleware('role:admin');
    Route::resource('category', CategoryController::class)->middleware('role:admin');
    Route::resource('catalogue', CatalogueController::class)->middleware('role:admin');
});
