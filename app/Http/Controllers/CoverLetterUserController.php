<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProfileCompanyCoverLetterRequest;
use App\Http\Requests\AddProfileCoverLetterRequest;
use App\Http\Requests\StoreCoverLetterUserRequest;
use App\Models\CoverLetterUser;
use App\Models\TemplateCoverLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CoverLetterUserController extends Controller
{
    // tampil data template cl
    public function index()
    {
        $templateCoverLetter = TemplateCoverLetter::getAllTemplateCoverLetter();

        return view('pelamar.cover_letter.index', compact('templateCoverLetter'));
    }

    // tambah database id template cl dan user id
    public function store(StoreCoverLetterUserRequest $request)
    {
        $user = Auth::user();

        // Validasi input
        $validated = $request->validated();
        $validated['user_id'] = $user->id;

        $adaCLUser = CoverLetterUser::findByUserIdAndTemplateId(
            $validated['user_id'],
            $validated['template_cover_letter_id']
        );

        if ($adaCLUser) {
            // Jika sudah ada, langsung redirect ke view selanjutnya
            return redirect()->route('pelamar.cover_letter.profile.index', $adaCLUser);
        }

        // Jika belum ada, simpan data baru
        $newCLUser = null;
        DB::transaction(function () use ($validated, &$newCLUser) {
            $newCLUser = CoverLetterUser::create($validated);
        });

        return redirect()->route('pelamar.cover_letter.profile.index', $newCLUser);
    }

    // tampil form input profile
    public function getProfile(CoverLetterUser $coverLetterUser)
    {
        return view('pelamar.cover_letter.profile.index', compact('coverLetterUser'));
    }

    // tambah data profile kedalam database
    public function addProfile(AddProfileCoverLetterRequest $request, CoverLetterUser $coverLetterUser)
    {
        DB::transaction(function () use ($request, $coverLetterUser) {
            $coverLetterUser->personalCoverLetter()->delete();

            $validated = $request->validated();

            $coverLetterUser->personalCoverLetter()->create($validated);
        });

        return redirect()->route('pelamar.cover_letter.profile_company.index', $coverLetterUser->id);
    }

    // tampil form input profile
    public function getProfileCompany(CoverLetterUser $coverLetterUser)
    {
        return view('pelamar.cover_letter.profile_company.index', compact('coverLetterUser'));
    }

    // tambah data profile kedalam database
    public function addProfileCompany(AddProfileCompanyCoverLetterRequest $request, CoverLetterUser $coverLetterUser)
    {
        DB::transaction(function () use ($request, $coverLetterUser) {
            $coverLetterUser->personalCompanyCoverLetter()->delete();

            $validated = $request->validated();

            $coverLetterUser->personalCompanyCoverLetter()->create($validated);
        });

        return redirect()->route('pelamar.cover_letter.paragraf_pembuka.index', $coverLetterUser->id);
    }
}
