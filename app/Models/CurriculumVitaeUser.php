<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumVitaeUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'template_curriculum_vitae_id'
    ];

    // relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relasi dengan tabel template curriculum vitae
    public function templateCV()
    {
        return $this->belongsTo(TemplateCurriculumVitae::class, 'template_curriculum_vitae_id');
    }

    // relasi dengan tabel personal curriculum vitae
    public function personalCurriculumVitae()
    {
        return $this->belongsTo(PersonalCurriculumVitae::class);
    }

    // relasi dengan tabel education
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    // relasi dengan tabel experience
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    // relasi dengan tabel language
    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    // relasi dengan tabel achievement
    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}