<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TemplateCoverLetterController;
use App\Http\Controllers\TemplateCurriculumVitaeController;
use App\Http\Controllers\UserAdminController;
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
    return view('homepage');
})->name('home');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::middleware('auth', 'verified')->group(function () {

    // Route Pelamar
    Route::middleware('role:pelamar')->group(function () {});

    // Route Perusahaan
    Route::middleware('role:perusahaan')->group(function () {

        Route::get('/dashboard-perusahaan', function () {
            return view('perusahaan.index');
        })->name('dashboard-perusahaan');
    });


    // Route Admin
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::middleware('role:admin')->group(function () {

            Route::get('dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');

            Route::get('users', [UserAdminController::class, 'index'])->name('users-admin');
            Route::delete('users/{user}', [UserAdminController::class, 'destroy'])->name('destroy-user-admin');

            Route::resource('template_curriculum_vitae', TemplateCurriculumVitaeController::class);
            Route::resource('template_cover_letter', TemplateCoverLetterController::class);
            Route::resource('skills', SkillController::class);
        });
    });
});

require __DIR__ . '/auth.php';
