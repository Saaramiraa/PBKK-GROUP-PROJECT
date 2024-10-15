<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('authors', AuthorController::class);

Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books/store', [BookController::class, 'store'])->name('books.store');
Route::delete('books/{bookId}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('books/search', [BookController::class, 'search'])->name('books.search');
