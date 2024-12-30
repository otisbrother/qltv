<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;

Route::resource('books', BookController::class);
Route::resource('borrowings', BorrowingController::class);

