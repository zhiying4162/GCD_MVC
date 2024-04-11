<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/calculate', [IndexController::class, 'calculate'])->name('calculate');
Route::get('/show', [IndexController::class, 'show'])->name('show');