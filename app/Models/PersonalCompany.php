<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_company',
        'email_company',
        'phone_company',
        'city_company',
        'type_of_company',
        'name_user_company',
        'description_company'
    ];

    // relasi dengan tabel hiring
    public function hirings()
    {
        return $this->hasMany(Hiring::class);
    }
}
