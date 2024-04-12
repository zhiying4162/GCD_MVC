<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


use App\Http\Controllers\BooksController;

Route::get('/', [BooksController::class, 'index'])->name('index');
Route::get('/calculate', [BooksController::class, 'calculate'])->name('calculate');
Route::get('/show', [BooksController::class, 'show'])->name('show');