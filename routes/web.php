<?php

use Illuminate\Support\Facades\Route;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

// Login Pages
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


// Admin Pages
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPublisherController;

// Main Pages
use App\Http\Controllers\BookController;
use App\Http\Controllers\PeminjamanController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/peminjaman', [PeminjamanController::class, 'index']);

Route::get('/tambah-penerbit', function () {
    return view('admin.tambah-penerbit');
});

Route::get('/tambah-kategori', [AdminCategoryController::class, 'index']);
Route::post('/tambah-kategori', [AdminCategoryController::class, 'store']);
Route::delete('/tambah-kategori/{category}', [AdminCategoryController::class, 'destroy']);

Route::get('/tambah-penerbit', [AdminPublisherController::class, 'index']);
Route::post('/tambah-penerbit', [AdminPublisherController::class, 'store']);
Route::delete('/tambah-penerbit/{publisher}', [AdminPublisherController::class, 'destroy']);

Route::get('/tambah-buku', [AdminBookController::class, 'index']);
Route::post('/tambah-buku', [AdminBookController::class, 'store']);
Route::delete('/tambah-buku/{book}', [AdminBookController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
