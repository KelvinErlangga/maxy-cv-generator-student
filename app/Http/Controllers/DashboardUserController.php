<?php

namespace App\Http\Controllers;

use App\Models\CoverLetterUser;
use App\Models\CurriculumVitaeUser;
use App\Models\Hiring;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardUserController extends Controller
{
    public function index()
    {
        $hirings = Hiring::with('personalCompany')->get();

        return view('pelamar.dashboard.dashboard_user', compact('hirings'));
    }

    // lowongan
    public function getLowongan()
    {
        $hirings = Hiring::all();

        return view('pelamar.dashboard.lowongan.index', compact('hirings'));
    }

    public function getShowLowongan($id)
    {
        $hiring = Hiring::with('personalCompany')->findOrFail($id);

        return response()->json([
            'position_hiring' => $hiring->position_hiring,
            'address_hiring' => $hiring->address_hiring,
            'type_of_work' => $hiring->type_of_work,
            'gaji' => $hiring->gaji,
            'description_hiring' => $hiring->description_hiring,
            'company_name' => $hiring->personalCompany->name_company ?? 'Tidak Ada Nama Perusahaan',
        ]);

        // Kirim data ke view
        return response()->json($hiring);
    }

    // Curriculum Vitae
    public function getCurriculumVitae()
    {
        $curriculumVitaes = CurriculumVitaeUser::getCurriculumVitaeUser();

        return view('pelamar.dashboard.curriculum_vitae.index', compact('curriculumVitaes'));
    }

    public function deleteCurriculumVitae(CurriculumVitaeUser $curriculumVitaeUser)
    {
        DB::transaction(function () use ($curriculumVitaeUser) {
            $curriculumVitaeUser->delete();
        });

        return redirect()->route('pelamar.dashboard.curriculum_vitae.index');
    }

    // Cover Letter
    public function getCoverLetter()
    {
        $coverLetters = CoverLetterUser::getCoverLetter();

        return view('pelamar.dashboard.cover_letter.index', compact('coverLetters'));
    }

    public function deleteCoverLetter(CoverLetterUser $coverLetterUser)
    {
        DB::transaction(function () use ($coverLetterUser) {
            $coverLetterUser->delete();
        });

        return redirect()->route('pelamar.dashboard.cover_letter.index');
    }

    // akun
    public function getAkun()
    {
        return view('pelamar.dashboard.akun.index');
    }
}
