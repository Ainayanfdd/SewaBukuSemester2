<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

//Untuk akses user
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('web');
Route::post('/login', [UserController::class, 'actionlogin'])->name('actionlogin');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'actionregister'])->name('actionregister');
Route::get('/logoutSuccess', [UserController::class, 'actionlogout'])->name('actionlogout');

//Untuk yang ada di navbar
Route::get('/library', [MainpageController::class, 'library']);
Route::get('/history', [MainpageController::class, 'history']);
Route::get('/kategori', [MainpageController::class, 'kategori']);
Route::get('/wishlist', [MainpageController::class, 'wishlist']);
Route::get('/notify', [MainpageController::class, 'notify']);
Route::get('/notifikasi', [MainpageController::class, 'notifikasi']);

//prefix admin
Route::prefix('admin')->group(function () {
    Route::get('/kadaluarsa', [AdminController::class, 'kadaluarsa'])->name('kadaluarsa');
    Route::get('/ketentuan', [AdminController::class, 'ketentuan'])->name('ketentuan');
    Route::get('/peminjaman', [AdminController::class, 'peminjaman'])->name('peminjaman');
    Route::get('/daftarbuku', [AdminController::class, 'daftarbuku'])->name('daftarbuku');
    Route::prefix('buku')->group(function () {
        Route::get('/{ISBN}/edit', [AdminController::class, 'edit'])->name('admin.buku.edit');
        Route::put('/{ISBN}', [AdminController::class, 'updateBuku'])->name('admin.buku.updateBuku');
        Route::delete('/{ISBN}', [AdminController::class, 'destroy'])->name('admin.buku.destroy');
        Route::post('/', [AdminController::class, 'tambahBuku'])->name('admin.buku.tambahBuku');
    });
});

Route::get('/detailbuku', function () {
    return view('detailbuku');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/legalandhelp', function () {
    return view('legalandhelp');
})->name('legalandhelp');

Route::get('/test', function () {
    return view('test');
});