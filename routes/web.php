<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::get('cars/trash', [CarController::class, 'trash'])->name('cars.trash');
Route::put('cars/{car}/restore', [CarController::class, 'restore'])->name('cars.restore');
Route::resource('cars', CarController::class);


