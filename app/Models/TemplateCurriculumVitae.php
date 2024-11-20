<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateCurriculumVitae extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_curriculum_vitae_name',
        'thumbnail_curriculum_vitae'
    ];

    // relasi dengan tabel curriculum vitae user
    public function curriculumVitaeUser()
    {
        return $this->hasMany(CurriculumVitaeUser::class);
    }
}
