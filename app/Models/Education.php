<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'curriculum_vitae_user_id',
        'school_name',
        'field_of_study',
        'start_date',
        'end_date'
    ];
}
