<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_company_id',
        'position_hiring',
        'description_hiring',
        'city_hiring',
        'type_of_work',
        'deadline_hiring',
        'gaji',
        'contact_information'
    ];

    //relasi dengan tabel applicant
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }
}
