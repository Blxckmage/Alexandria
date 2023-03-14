<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminDendaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminPublisherController;

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

// All Roles

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/account/{name}', [UserController::class, 'index']);
Route::post('/account/pay/{id}', [UserController::class, 'bayar']);


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/borrowing', [PeminjamanController::class, 'index']);
Route::post('/borrowing/search', [PeminjamanController::class, 'search']);
Route::get('/borrowing/borrow/{id}', [PeminjamanController::class, 'borrow']);
Route::post('/borrowing/borrow', [PeminjamanController::class, 'store']);

// Employee

Route::get('/approval', [ApprovalController::class, 'index'])->name('approval.index');
Route::post('/approval/approve/{id}', [ApprovalController::class, 'approve']);
Route::post('/approval/reject/{id}', [ApprovalController::class, 'reject']);

Route::get('/tambah-kategori', [AdminCategoryController::class, 'index']);
Route::post('/tambah-kategori', [AdminCategoryController::class, 'store']);
Route::delete('/tambah-kategori/{category}', [AdminCategoryController::class, 'destroy']);

Route::get('/tambah-penerbit', [AdminPublisherController::class, 'index']);
Route::post('/tambah-penerbit', [AdminPublisherController::class, 'store']);
Route::delete('/tambah-penerbit/{publisher}', [AdminPublisherController::class, 'destroy']);

Route::get('/tambah-buku', [AdminBookController::class, 'index']);
Route::post('/tambah-buku', [AdminBookController::class, 'store']);
Route::delete('/tambah-buku/{book}', [AdminBookController::class, 'destroy']);


Route::get('/ubah-denda', [AdminDendaController::class, 'index']);
Route::post('/ubah-denda/{id}', [AdminDendaController::class, 'update']);

// Admin

Route::get('/tambah-petugas', [AdminEmployeeController::class, 'index']);
Route::post('/tambah-petugas/update/{id}', [AdminEmployeeController::class, 'update']);
Route::post('/tambah-petugas', [AdminEmployeeController::class, 'search']);


Route::get('/laporan', [AdminReportController::class, 'index']);
Route::post('/laporan/print', [AdminReportController::class, 'print']);

// Login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
