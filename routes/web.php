<?php

use Illuminate\Support\Facades\Route;

// Login Pages
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Admin Pages
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;

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

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/tambah-penerbit', function () {
    return view('admin.tambah-penerbit');
});

Route::get('/tambah-kategori', [CategoryController::class, 'index']);
Route::post('/tambah-kategori', [CategoryController::class, 'store']);
Route::delete('/tambah-kategori/{category}', [CategoryController::class, 'destroy']);

Route::get('/tambah-penerbit', [PublisherController::class, 'index']);
Route::post('/tambah-penerbit', [PublisherController::class, 'store']);
Route::delete('/tambah-penerbit/{publisher}', [PublisherController::class, 'destroy']);

Route::get('/tambah-buku', [BookController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
