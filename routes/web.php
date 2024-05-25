<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('feedback', function () {
    return view('feedback');
});

Route::get('product/{id}', [BookController::class, 'show'])->name('product.show');


Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('books', [BookController::class, 'index'])->name('books.index');
    Route::post('books', [BookController::class, 'import'])->name('books.import');
    Route::get('users', [BookController::class, 'users'])->name('users.index');
});
Route::post('search', [BookController::class, 'search'])->name('books.search');
Route::post('cart-store', [BookController::class, 'cartStore'])->name('cart.store');
Route::delete('cart-desotry/{id}', [BookController::class, 'cartDestroy'])->name('cart.destroy');

Route::get('checkout', [BookController::class, 'checkout'])->name('checkout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
