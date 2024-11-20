<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TemplateCoverLetterController;
use App\Http\Controllers\TemplateCurriculumVitaeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::middleware('auth', 'verified')->group(function () {

    // Route Pelamar
    Route::middleware('role:pelamar')->group(function () {

        Route::get('/dashboard-pelamar', function () {
            return view('pelamar.index');
        })->name('dashboard-pelamar');
    });

    // Route Perusahaan
    Route::middleware('role:perusahaan')->group(function () {

        Route::get('/dashboard-perusahaan', function () {
            return view('perusahaan.index');
        })->name('dashboard-perusahaan');
    });

    // Route Admin
    Route::middleware('role:admin')->group(function () {

        Route::get('/dashboard-admin', function () {
            return view('admin.index');
        })->name('dashboard-admin');

        Route::resource('template_curriculum_vitae', TemplateCurriculumVitaeController::class);
        Route::resource('template_cover_letter', TemplateCoverLetterController::class);
        Route::resource('skills', SkillController::class);
    });
});

require __DIR__ . '/auth.php';
