<?php

use Illuminate\Support\Facades\Route;

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

// Route untuk homepage
Route::get('/', function () {
    return view('home.index');
})->name('home');

// Route untuk welcome
Route::get('/welcome', function () {
    return view('welcome');
})->name('home');

// Route untuk dashboard (sudah ada)
Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth'])->name('home.index');

// Tambahkan route untuk halaman CV
Route::prefix('cv')->group(function () {
    Route::get('generate', function () {
        return view('cv.generate');
    })->name('cv.generate');

    Route::get('template', function () {
        return view('cv.template');
    })->name('cv.template');
});

// Tambahkan route untuk halaman Cover Letter
Route::prefix('cover-letter')->group(function () {
    Route::get('generate', function () {
        return view('cover-letter.generate');
    })->name('cover-letter.generate');

    Route::get('template', function () {
        return view('cover-letter.template');
    })->name('cover-letter.template');
});

// Tambahkan route untuk halaman dashboard user, company, dan admin
Route::prefix('dashboard')->group(function () {
    Route::get('user', function () {
        return view('dashboard.user');
    })->middleware(['auth'])->name('dashboard.user');

    Route::get('company', function () {
        return view('dashboard.company');
    })->middleware(['auth'])->name('dashboard.company');

    Route::get('admin', function () {
        return view('dashboard.admin');
    })->middleware(['auth'])->name('dashboard.admin');
});

require __DIR__.'/auth.php';
