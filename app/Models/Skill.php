<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'category_skill'
    ];

    // relasi dengan tabel skill user
    public function skillUser()
    {
        return $this->hasMany(SkillUser::class);
    }
}
