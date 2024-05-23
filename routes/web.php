<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/detailbuku', function () {
    return view('detailbuku');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/notify', function () {
    return view('notify');
});

Route::get('/legalandhelp', function () {
    return view('legalandhelp');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
});

//prefix admin
Route::prefix('admin')->group(function () {
    Route::get('/kadaluarsa', function () {
        return view('kadaluarsa');
    })->name('kadaluarsa');

    Route::get('/ketentuan', function () {
        return view('ketentuan');
    })->name('ketentuan');

    Route::get('/peminjaman', function () {
        return view('peminjaman');
    })->name('peminjaman');

    Route::get('/daftarbuku', function () {
        return view('daftarbuku');
    })->name('daftarbuku');
});
