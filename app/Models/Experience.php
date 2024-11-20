<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'curriculum_vitae_user_id',
        'position_experience',
        'company_experience',
        'description_experience',
        'start_date',
        'end_date'
    ];
}
