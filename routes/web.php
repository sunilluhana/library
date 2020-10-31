<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::post('/books', [BooksController::class, 'store'])->name('books.store');

Route::patch('/books/{book}', [BooksController::class, 'update'])->name('books.update');