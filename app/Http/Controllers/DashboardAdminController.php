<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\TemplateCoverLetter;
use App\Models\TemplateCurriculumVitae;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $countTemplateCV = TemplateCurriculumVitae::getCountTemplateCV();
        $countTemplateCL = TemplateCoverLetter::getCountTemplateCoverLetter();

        $skills = Skill::getCountSkill();

        $userPelamar = User::getCountUserPelamar();

        return view('admin.dashboard_admin', compact('countTemplateCV', 'countTemplateCL', 'skills', 'userPelamar'));
    }
}
