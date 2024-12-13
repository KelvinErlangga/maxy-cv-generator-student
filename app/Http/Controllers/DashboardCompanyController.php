<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddHiringRequest;
use App\Models\PersonalCompany;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardCompanyController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $personalCompany = $user->personalCompany;

        return view('perusahaan.dashboard_perusahaan', compact('personalCompany'));
    }

    public function getLowongan()
    {
        return view('perusahaan.lowongan.index');
    }

    public function addLowongan(AddHiringRequest $request)
    {
        $user = Auth::user();

        $personalCompany = $user->personalCompany;

        DB::transaction(function () use ($request, $personalCompany) {
            $validated = $request->validated();

            $personalCompany->hirings()->create($validated);
        });

        return redirect()->route('perusahaan.lowongan.index');
    }

    public function getKandidat()
    {
        return view('perusahaan.kandidat.index');
    }
}
