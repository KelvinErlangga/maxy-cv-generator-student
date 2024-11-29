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

// Route untuk homepage
Route::get('/', function () {
    return view('homepage');
})->name('home');

// Route untuk Tentang
Route::get('/tentang/{section}', function ($section) {
    switch ($section) {
        case 'kami':
            return view('tentang.kami');
        case 'kontak':
            return view('tentang.kontak');
        case 'faq':
            return view('tentang.faq');
        default:
            abort(404);
    }
})->name('tentang');

// Route untuk CV
Route::get('/cv/generate/{section}', function ($section) {
    switch ($section) {
        case 'detail_pribadi':
            return view('cv.generate.detail_pribadi');
        case 'pengalaman_kerja':
            return view('cv.generate.pengalaman_kerja');
        case 'hasil_pengalaman_kerja':
            return view('cv.generate.hasil_pengalaman_kerja');
        case 'pendidikan':
            return view('cv.generate.pendidikan');
        case 'hasil_pendidikan':
            return view('cv.generate.hasil_pendidikan');
        case 'bahasa':
            return view('cv.generate.bahasa');
        case 'keterampilan_teknis':
            return view('cv.generate.keterampilan_teknis');
        case 'keterampilan_non_teknis':
            return view('cv.generate.keterampilan_non_teknis');
        case 'pengalaman_organisasi':
            return view('cv.generate.pengalaman_organisasi');
        case 'hasil_pengalaman_organisasi':
            return view('cv.generate.hasil_pengalaman_organisasi');
        case 'prestasi':
            return view('cv.generate.prestasi');
        case 'hasil_prestasi':
            return view('cv.generate.hasil_prestasi');
        case 'link_informasi':
            return view('cv.generate.link_informasi');
        case 'template':
            return view('cv.template');
        default:
            abort(404);
    }
})->name('cv');

// Route untuk Cover Letter
Route::get('/cover-letter/{section}', function ($section) {
    switch ($section) {
        case 'generate':
            return view('cover_letter.generate');
        case 'template':
            return view('cover_letter.template');
        default:
            abort(404);
    }
})->name('cover_letter');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

// Middleware untuk authenticated user
Route::middleware('auth', 'verified')->group(function () {

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
