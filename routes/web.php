<?php

use App\Http\Controllers\CurriculumVitaeUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TemplateCoverLetterController;
use App\Http\Controllers\TemplateCurriculumVitaeController;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

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
})->name('welcome');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('/curriculum-vitae/template-curriculum-vitae', [CurriculumVitaeUserController::class, 'index'])->name('pelamar.curriculum_vitae.index');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/home', function () {
        return view('welcome');
    })->name('home');

    // Route Pelamar
    Route::middleware('role:pelamar')->group(function () {

        // cv generate
        Route::post('/curriculum-vitae/template-curriculum-vitae', [CurriculumVitaeUserController::class, 'store'])->name('pelamar.curriculum_vitae.store');

        // data diri
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile', [CurriculumVitaeUserController::class, 'getProfile'])
            ->name('pelamar.curriculum_vitae.profile.index');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile', [CurriculumVitaeUserController::class, 'addProfile'])
            ->name('pelamar.curriculum_vitae.profile.addProfile');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/edit/{personalCurriculumVitae}', [CurriculumVitaeUserController::class, 'editProfile'])
            ->name('pelamar.curriculum_vitae.profile.editProfile');
        Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/edit/{personalCurriculumVitae}', [CurriculumVitaeUserController::class, 'updateProfile'])
            ->name('pelamar.curriculum_vitae.profile.updateProfile');

        // pengalaman kerja
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/experience', [CurriculumVitaeUserController::class, 'getExperience'])
            ->name('pelamar.curriculum_vitae.experience.index');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/experience/create', [CurriculumVitaeUserController::class, 'createExperience'])
            ->name('pelamar.curriculum_vitae.experience.create');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/experience', [CurriculumVitaeUserController::class, 'addExperience'])
            ->name('pelamar.curriculum_vitae.experience.addExperience');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/experience/{experience}', [CurriculumVitaeUserController::class, 'editExperience'])
            ->name('pelamar.curriculum_vitae.experience.editExperience');
        Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/experience/{experience}', [CurriculumVitaeUserController::class, 'updateExperience'])
            ->name('pelamar.curriculum_vitae.experience.updateExperience');

        Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/experience/{experience}', [CurriculumVitaeUserController::class, 'deleteExperience'])
            ->name('pelamar.curriculum_vitae.experience.deleteExperience');

        // pendidikan
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/education', [CurriculumVitaeUserController::class, 'getEducation'])
            ->name('pelamar.curriculum_vitae.education.index');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/education/create', [CurriculumVitaeUserController::class, 'createEducation'])
            ->name('pelamar.curriculum_vitae.education.createEducation');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/education', [CurriculumVitaeUserController::class, 'addEducation'])
            ->name('pelamar.curriculum_vitae.education.addEducation');


        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/education/{education}', [CurriculumVitaeUserController::class, 'editEducation'])
            ->name('pelamar.curriculum_vitae.education.editEducation');
        Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/education/{education}', [CurriculumVitaeUserController::class, 'updateEducation'])
            ->name('pelamar.curriculum_vitae.education.updateEducation');

        Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/education/{education}', [CurriculumVitaeUserController::class, 'deleteEducation'])
            ->name('pelamar.curriculum_vitae.education.deleteEducation');

        // bahasa
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/language', [CurriculumVitaeUserController::class, 'getLanguage'])
            ->name('pelamar.curriculum_vitae.language.index');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/language', [CurriculumVitaeUserController::class, 'addLanguage'])
            ->name('pelamar.curriculum_vitae.language.addLanguage');
        // Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/language/{language}', [CurriculumVitaeUserController::class, 'updateLanguage'])
        //     ->name('pelamar.curriculum_vitae.language.updateLanguage');
        // Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/language/{language}', [CurriculumVitaeUserController::class, 'deleteLanguage'])
        //     ->name('pelamar.curriculum_vitae.language.deleteLanguage');

        // keahlian
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/skill', [CurriculumVitaeUserController::class, 'getSkill'])
            ->name('pelamar.curriculum_vitae.skill.index');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/skill', [CurriculumVitaeUserController::class, 'addSkill'])
            ->name('pelamar.curriculum_vitae.skill.addSkill');
        // Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/skill/{skill}', [CurriculumVitaeUserController::class, 'updateSkill'])
        //     ->name('pelamar.curriculum_vitae.skill.updateSkill');
        // Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/skill/{skill}', [CurriculumVitaeUserController::class, 'deleteSkill'])
        //     ->name('pelamar.curriculum_vitae.skill.deleteSkill');

        // organisasi
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/organization', [CurriculumVitaeUserController::class, 'getOrganization'])
            ->name('pelamar.curriculum_vitae.organization.index');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/organization/create', [CurriculumVitaeUserController::class, 'createOrganization'])
            ->name('pelamar.curriculum_vitae.organization.createOrganization');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/organization', [CurriculumVitaeUserController::class, 'addOrganization'])
            ->name('pelamar.curriculum_vitae.organization.addOrganization');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/organization/{organization}', [CurriculumVitaeUserController::class, 'EditOrganization'])
            ->name('pelamar.curriculum_vitae.organization.EditOrganization');
        Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/organization/{organization}', [CurriculumVitaeUserController::class, 'updateOrganization'])
            ->name('pelamar.curriculum_vitae.organization.updateOrganization');

        Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/organization/{organization}', [CurriculumVitaeUserController::class, 'deleteOrganization'])
            ->name('pelamar.curriculum_vitae.organization.deleteOrganization');

        // prestasi
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/achievement', [CurriculumVitaeUserController::class, 'getAchievement'])
            ->name('pelamar.curriculum_vitae.achievement.index');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/achievement/create', [CurriculumVitaeUserController::class, 'createAchievement'])
            ->name('pelamar.curriculum_vitae.achievement.createAchievement');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/achievement', [CurriculumVitaeUserController::class, 'addAchievement'])
            ->name('pelamar.curriculum_vitae.achievement.addAchievement');

        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/achievement/{achievement}', [CurriculumVitaeUserController::class, 'editAchievement'])
            ->name('pelamar.curriculum_vitae.achievement.editAchievement');
        Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/achievement/{achievement}', [CurriculumVitaeUserController::class, 'updateAchievement'])
            ->name('pelamar.curriculum_vitae.achievement.updateAchievement');

        Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/achievement/{achievement}', [CurriculumVitaeUserController::class, 'deleteAchievement'])
            ->name('pelamar.curriculum_vitae.achievement.deleteAchievement');

        // media sosial
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/profile/social-media', [CurriculumVitaeUserController::class, 'getSocialMedia'])
            ->name('pelamar.curriculum_vitae.social_media.index');
        Route::post('/curriculum-vitae/{curriculum_vitae_user}/profile/social-media', [CurriculumVitaeUserController::class, 'addSocialMedia'])
            ->name('pelamar.curriculum_vitae.social_media.addSocialMedia');
        // Route::put('/curriculum-vitae/{curriculum_vitae_user}/profile/social-media/{social_media}', [CurriculumVitaeUserController::class, 'updateSocialMedia'])
        //     ->name('pelamar.curriculum_vitae.social_media.updateSocialMedia');
        // Route::delete('/curriculum-vitae/{curriculum_vitae_user}/profile/social-media/{social_media}', [CurriculumVitaeUserController::class, 'deleteSocialMedia'])
        //     ->name('pelamar.curriculum_vitae.social_media.deleteSocialMedia');


        // preview cv
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/preview', [CurriculumVitaeUserController::class, 'previewCV'])->name('pelamar.curriculum_vitae.preview.index');

        // print cv
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/print-cv', [PDFController::class, 'printCurriculumVitae'])->name('print-cv');

        // download cv
        Route::get('/curriculum-vitae/{curriculum_vitae_user}/export-cv', [PDFController::class, 'exportPDFCurriculumVitae'])->name('export-cv.pdf');
    });


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
