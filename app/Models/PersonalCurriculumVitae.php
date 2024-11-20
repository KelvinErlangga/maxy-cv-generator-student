<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCurriculumVitae extends Model
{
    use HasFactory;

    protected $fillable = [
        'curriculum_vitae_user_id',
        'full_name_curriculum_vitae',
        'email_curriculum_vitae',
        'phone_curriculum_vitae',
        'date_of_birth_curriculum_vitae',
        'address_curriculum_vitae',
        'personal_summary'
    ];
}
