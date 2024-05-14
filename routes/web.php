<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/adminPanel', [UserController::class, 'index'])->middleware('can:isAdmin');
    Route::delete('/adminPanel/{user}', [UserController::class, 'destroy'])->middleware('can:isAdmin');
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create')->middleware('can:isAdmin');
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
    Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books.edit')->middleware('can:isAdmin');
    Route::post('/books', [BookController::class, 'store'])->name('books.store')->middleware('can:isAdmin');
    Route::post('/books/{book}', [BookController::class, 'update'])->name('books.update')->middleware('can:isAdmin');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->middleware('can:isAdmin');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');