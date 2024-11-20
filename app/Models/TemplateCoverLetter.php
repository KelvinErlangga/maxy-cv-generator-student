<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateCoverLetter extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_cover_letter_name',
        'thumbnail_cover_letter'
    ];
}
