<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectronicController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', [ElectronicController::class, 'index'])
    ->name('electronics.index');

Route::get('/produk/{id}', [ElectronicController::class, 'show'])
    ->name('electronics.show');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');